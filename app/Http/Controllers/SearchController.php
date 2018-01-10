<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;
use Auth;
use File;
use Image;

use App\ContentModel;

class SearchController extends Controller
{

	public  function searchContent(Request $request){
    	  // $content = new ContentModel();
        // $content = DB::table('content')->get();
        // return response()->json($content);
    }

		public function searchTitleContents($busqueda)
    {
        try{
            $content = ContentModel::
            where('titulo','LIKE',"%$busqueda%")
            ->orWhere('descripcionContenido','LIKE',"%$busqueda%")
            ->orWhere('created_at','LIKE',"%$busqueda%")
            ->with('user')
            ->get();
            return response()->json(['contenidos'=> $content]);

        }catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error'=> $e]);
            
        }
    }

		public function searchDescriptionContents(Request $request)
    {
        try{
            $id = Auth::user()->id;
            $content = new ContentModel();
            $content = ContentModel::where('descripcionContenido','LIKE',"%{$request->descripcion}%")->with('user')->get();
            return response()->json(['contenidos'=> $content]);

        }catch(\Illuminate\Database\QueryException $e){
            dd($e->getMessage());
        }
    }

		public function searchDateContents(Request $request)
    {
        try{
            // $id = Auth::user()->id;
            // $content = new ContentModel();
            // $content = ContentModel::where('titulo','=',$id)->with('user')->get();
            // return response()->json(['contenidos'=> $content]);

        }catch(\Illuminate\Database\QueryException $e){
            dd($e->getMessage());
        }
    }

}
