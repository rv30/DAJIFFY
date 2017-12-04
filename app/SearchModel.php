<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchModel extends Model
{
    public function searchPost(Request $request)
    {
		//$search = new SearchModel();
			$search = DB::table('contenido')->where([
				['titulo', 'LIKE', $request->busqueda]
			])->get();

		return Redirect::to('busqueda');       														
    }

    public function searchUser(Request $request)
    {
		//$search = new SearchModel();
			$search = DB::table('user')->where([
				['nombre', 'LIKE', $request->busqueda]
			])->get();

		return Redirect::to('busqueda');       														
    }
}
