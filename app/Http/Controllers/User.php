<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        //return view('index'); 
    }

    public function login()
    { 
        return view('Notificaciones');
    /*
        $input = Request::only('correo','contrasenia');
        $emailLog = $input['correo'];
        $passLog = $input['contrasenia'];
        try{
            $selectUser = DB::select('select id,correo,contrasenia from user where correo = ?',[$emailLog]);
            $resultCount = count($selectUser);
            
            if($resultCount > 0){
                $result = json_decode(json_encode($selectUser),true)[0];
                $idLog = $result['id'];
                $nameLog = $result['nombre'];
                $emailRes = $result['correo'];
                $passRes = $result['contrasenia'];

                if($passLog == $passRes) {

                    session(['userId' => $idLog]);
                    session(['userName'=> $nameLog]);

                return view('busqueda');

                }else{
                    return view('Login');
                    //echo "contraseña INcorrecta";
                }
                }else{
                return view('Login');
            }
            
        }catch(\Illuminate\Database\QueryException $e){
            dd($e->getMessage());
        }
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
