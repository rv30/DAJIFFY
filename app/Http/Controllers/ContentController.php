<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function uploadPost(Request $request)
    {
    	$content = new ContentModel();
		$input = Request::only('contenido','titulo','descripcionContenido');
        //$content = $input['contenido'];
        //$typeContent
        $visible = 1;
        $dateUpload = 'now()';
        $title = $input['titulo'];
        $description = $input['descripcionContenido'];
        $active = 1;
        $id = $_SESSION['idUsuario'];
        /*
        $file_tmp = $input['contenido']['tmp_name'];
        $file_type = $input['contenido']['type'];
        $file_ext = strtolower(end(explode('.',$input['contenido']['name'])));
      
        $image = file_get_contents($file_tmp);
        
        if($file_type == 'image/jpeg' || $file_type == 'image/png' || $file_type == 'image/bmp')
        {
            $base64 = 'data:image/' . $file_ext . ';base64,' . base64_encode($image);
            $file_type = "Imagen";
        }
        
        else if($file_type == 'video/avi' || $file_type == 'video/mpeg' || $file_type == 'video/webm')
        {
            $base64 = 'data:video/' . $file_ext . ';base64,' . base64_encode($image);
            $file_type = "Video";
        }
        
        else if($file_type == 'audio/mpeg')
        {
            $file_type = "Audio";
        }
		*/
        if(isset($input['contenido']))
            {
            $file_tmp_Contenido =$input['contenido']['tmp_name'];
            $file_type_Contenido=$input['contenido']['type'];
            $file_ext_Contenido=strtolower(end(explode('.',$input['contenido']['name'])));
            $imageAvatar = file_get_contents($file_tmp_Avatar);
            if($file_type_contenido == 'image/jpeg' || $file_type_Avatar == 'image/png' || $file_type_Avatar == 'image/bmp')
            {
            $base64contenido = 'data:image/' . $file_ext_Avatar . ';base64,' . base64_encode($imageAvatar);
            $file_type_Contenido = "Imagen";
            }
        }

	        try{
		        DB::table('users')->insert([
		        ['contenido' => $base64contenido],
		    	['tipo' => $title],
		    	['visible' => $visible],
		    	['fechaSubida' => $dateUpload],
		    	['titulo' => $title],
		    	['descripcionContenido' => $description],
		    	['activo' => $active],
		    	['idUsuario' => $id]
		    ]);

    	return Redirect::to('notificaciones');

    	}catch(\Illuminate\Database\QueryException $e){
            dd($e->getMessage());
        } 
    }

    public function deletePost(Request $request)
    {	       
	        try{
		        DB::table('content')
	            ->where('idContenido', $_SESSION['idContenido'])
	            ->update(['activo' => 0]);

    	return Redirect::to('index');

    	}catch(\Illuminate\Database\QueryException $e){
            dd($e->getMessage());
        } 
    }

    public function editPost(Request $request)
    {	
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
    }

}
