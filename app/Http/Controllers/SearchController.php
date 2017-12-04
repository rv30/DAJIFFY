<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\ContentModel;

class SearchController extends Controller
{

	public  function searchContent(Request $request){
    	$content = new ContentModel();
        $content = DB::table('content')->get();
        return response()->json($content);
    }

}
