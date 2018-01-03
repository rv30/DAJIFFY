<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\ContentModel;

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
            $content = new ContentModel();
            //$content = DB::table('content')->where('idUsuario', '=', $id )->get();
            $content = ContentModel::where('idUsuario','=',$id)->with('user')->get();
            return response()->json(['contenidos'=> $content]);
            //return $idUsuarioLogeado;

        }catch(\Illuminate\Database\QueryException $e){
            dd($e->getMessage());
        }
    }

    public function loadSinglePost($id)
    {
        try{
            $content = ContentModel::where('id','=',$id)->with('user')->first();
            return response()->json(['contenido'=> $content]);

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
        /*
    	$content = new ContentModel();
		$input = Request::only('titulo','descripcionContenido');

    	$title = $input['titulo'];
        $description = $input['descripcionContenido'];

	        try{
		        DB::table('content')
	            ->where('idContenido', $_SESSION['idContenido'])->update([
	            ['titulo' => $title],
		    	['descripcionContenido' => $description]
	        ]);

    	return Redirect::to('index');

    	}catch(\Illuminate\Database\QueryException $e){
            dd($e->getMessage());
        }
        */
    }

}
