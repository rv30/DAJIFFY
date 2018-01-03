<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserModel;
use App\User;

use Auth;
use DB;

use File;
use Image;
// use JavaScript;
// use Illuminate\Http\File;
// use Illuminate\Support\Facades\Storage;

//use Illuminate\DB;

//use Illuminate\Database\Eloquent\Model;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function login(Request $request)
    {
        $user = new User();
        try{
        //     $user = DB::table('user')->where([
        //     ['email', '=', $request->email],
        //     ['password', '=', $request->pass],
        // ])->get();
        // $request->session()->forget('user');
        // session(['user'=> $user]);

        if (Auth::attempt(['email' =>  $request->email, 'password' => $request->pass]))
       {
           echo 'logeado';
       }

       echo 'no logeado';

        //$result = json_decode(json_encode($user),true)[0];
        //session(['idUsuarioLogeado'=> $result['id']]);

        //return $request->session()->get('idUsuarioLogeado');
        }catch(\Illuminate\Database\QueryException $e){
            dd($e->getMessage());
        }


    }

    public  function statusLogin(Request $request){
        $user =  $request->session()->get('user');
        return $user;
    }

    public function loadProfile($id)
    {
      try{
        // $user = DB::table('user')
        // ->where('id', '=', $id)->get();
        $userProfile = User::where('id','=',$id)->with('contents')->first();
        return response()->json(['usuarioPerfil'=> $userProfile]);
        //return view('Profile', compact('user'));
        //return response()->json(['usuario'=> $user]);
      }catch(\Illuminate\Database\QueryException $e){
          dd($e->getMessage());
      }
    }

    public function registerUser(Request $request)
    {
        $imagen = $request['imagen'];
        $usuario = $request['usuario'];
        $user = new User();
        $path = " ";
        $token = $request['token'];
        try{

        $name = $request->name ." ". $request->lastName;

            if ($imagen != "") {
            $folder=File::makeDirectory(public_path('uploads/Usuarios/' . $usuario['userName'].'/profileImages'), 0775, true, true);
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
                    Image::make($exploded[1])->save(public_path('uploads/Usuarios/'. $usuario['userName']. '/profileImages/' . $filename));

                    }
                    else{
                        $filename="avatar.jpg";
                    }
        }

        $usuario['avatar'] = $filename;

        $usuario['password'] = bcrypt($usuario['password']);
        $usuario['tipoUsuario'] = 'Usuario';
        $usuario['activo'] = 1;
        $usuario['bloqueado'] = 0;
        $usuario['privado'] = 0;
        $user=user::create($usuario);

        session(['user'=> $user]);

        return $request->session()->get('user');

        }catch(\Illuminate\Database\QueryException $e){
            dd($e->getMessage());
        }
    }

    public function logOut(Request $request)
    {
		    Auth::logout();
        return response()->json(['Mensaje'=> 'Sesion Cerrada']);
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
