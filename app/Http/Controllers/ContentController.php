<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\ContentModel;
use App\userLikesContent;
use App\userCommentsContent;

use DB;
use Auth;
use File;
use Image;

class ContentController extends Controller
{
    public function uploadPost(Request $request)
    {
      $imagen = $request['imagen'];
      $contenido = $request['contenido'];
      //$content = new ContentModel();|
      $usuario = Auth::user();
      //$path = " ";
      try{
          if ($imagen != "") {
          $folder=File::makeDirectory(public_path('uploads/Usuarios/' . $usuario->userName.'/contentsUser'), 0775, true, true);
                   $exploded=explode(',',$imagen);

                  if (str_contains($exploded[0],'jpeg')) {
                      $extensionFile="jpg";
                  }else if(str_contains($exploded[0],'png')){

                      $extensionFile="png";
                  }else{
                      $extensionFile="";
                  }

                  $filename= str_random() .'-'.str_random() .'-'. time() . '.' . $extensionFile;
                  if ($extensionFile!="")
                  {
                  Image::make($exploded[1])->save(public_path('uploads/Usuarios/'. $usuario->userName. '/contentsUser/' . $filename));

                  }
                  else{
                      $filename="avatar.jpg";
                  }
      }
      $contenido['content'] = $filename;
      $contenido['tipo'] = 'Imagen';
      $contenido['visible'] = 1;
      $contenido['activo'] = 1;
      $contenido['idUsuario'] = $usuario->id;
      // $content=ContentModel::create([
      //       "content"=> ,
      //       "tipo" => "Imagen",
      //       "visible" => 1,
      //       "titulo" => $contenido["titulo"],
      //       "descripcionContenido" => $contenido['descripcionContenido'],
      //       "activo" => 1,
      //       "idUsuario" => $usuario->id
      //         ]);
      $content=ContentModel::create($contenido);
      return response()->json(['contenido'=> $content, "message"=>"EXITOSO"]);

      }catch(\Illuminate\Database\QueryException $e){
          dd($e->getMessage());
      }
    }

    public function userContents(Request $request)
    {
        try{
            $id = Auth::user()->id;
            $content = ContentModel::where('idUsuario','=',$id)
            ->withCount('likes')
            ->with('user')->orderBy('created_at','desc')->get();
            return response()->json(['contenidos'=> $content]);
            //return $idUsuarioLogeado;

        }catch(\Illuminate\Database\QueryException $e){
            dd($e->getMessage());
        }
    }

    public function loadSinglePost($id)
    {
        try{
            $content = ContentModel::where('id','=',$id)->with('user')
            ->with(['comments'=>function($q){
              $q -> with('user')->get();
            }])->first();
            $count = userLikesContent::where('idContenido','=',$id)->count();
            return response()->json(['contenido'=> $content, 'countLikes'=> $count]);

        }catch(\Illuminate\Database\QueryException $e){
            dd($e->getMessage());
        }
    }

    public function getContentImage($userName, $name)
    {
        $storagePath = public_path("uploads/Usuarios/". $userName  . "/contentsUser/" . $name);
        return Image::make($storagePath)->response();
    }

    public function getProfileImage($userName, $name)
    {
        $storagePath = public_path("uploads/Usuarios/". $userName  . "/profileImages/" . $name);
        return Image::make($storagePath)->response();
    }

    public function deletePost($id)
    {
      try{
        $content = ContentModel::where('id', '=', $id)->first();
        $content->delete();
        return response()->json(['Mensaje'=> 'Eliminado']);
        //return view('Home');

    }catch(\Illuminate\Database\QueryException $e){
        dd($e->getMessage());
        return response()->json(['Mensaje'=> 'Error al eliminar','Error'=>$e]);
    }
    }
    public function editPost(Request $request)
    {
      try{
          $contenido = $request['contenido'];
          $content = ContentModel::where('id','=',$contenido['id'])->first();
          $content->titulo = $contenido['titulo'];
          $content->descripcionContenido = $contenido['descripcionContenido'];
          $content->update();
          return response()->json(['Mensaje'=> 'Editado', 'contenido'=> $contenido]);

      }catch(\Illuminate\Database\QueryException $e){
          dd($e->getMessage());
          return response()->json(['Mensaje'=> 'Error al editar','Error'=>$e]);
      }
    }
    public function likePost(Request $request)
    {
      $idContenido = $request['id'];
      $id = Auth::user()->id;
      $userLikesContent = userLikesContent::where('idUsuario','=',$id)->where('idContenido','=',$idContenido)->first();

      if ($userLikesContent) {

        return response()->json(['Mensaje'=> 'No Like']);

      }else{

        try {
              userLikesContent::create([
                "idUsuario"=>$id,
                "idContenido"=>$idContenido
              ]);
              return response()->json(['Mensaje'=> 'Si Like']);
          
        } catch (Exception $e) {
          return response()->json(['error'=> $e]);
        }

      }
    }
    public function commentPost(Request $request)
    {
      $idContenido = $request['id'];
      $id = Auth::user()->id;
      $comentario = $request['comment'];

      try {
              userCommentsContent::create([
                "idUsuario"=>$id,
                "idContenido"=>$idContenido,
                "comentario"=>$comentario
              ]);          
        } catch (Exception $e) {
          return response()->json(['error'=> $e]);
        }

      return response()->json(['Mensaje'=> 'success']);
    }

}
