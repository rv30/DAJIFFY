<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserModel;
use App\ContentModel;
use App\User;
use Mail;
use App\Mail\sendEmail;


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
        $userProfile = User::where('id','=',$id)->with(['contents'=>function($q){
            $q -> orderBy('created_at','desc')->get();
        }])->first();
        return response()->json(['usuarioPerfil'=> $userProfile]);
        //return view('Profile', compact('user'));
        //return response()->json(['usuario'=> $user]);
      }catch(\Illuminate\Database\QueryException $e){
          dd($e->getMessage());
      }
    }

    public function postCount($id)
    {
      try{
      $countContents = ContentModel::where('idUsuario','=',$id)->count();
      return response()->json(['postCount'=> $countContents]);

      }catch(\Illuminate\Database\QueryException $e){
          dd($e->getMessage());
      }
    }

    public function registerUser(Request $request)
    {
        $imagen = $request['imagen'];
        $usuario = $request['usuario'];
        $path = " ";
        $token = $request['token'];
        try{

        $name = $request->name ." ". $request->lastName;
        $fecha = $usuario['año'] ."-".$usuario['mes'] ."-".$usuario['dia'];

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
        $usuario['fechaNacimiento'] = $fecha;
        $usuario['password'] = bcrypt($usuario['password']);
        $usuario['tipoUsuario'] = 'Usuario';
        $usuario['activo'] = 1;
        $usuario['bloqueado'] = 0;
        $usuario['privado'] = 0;
        //$usuario['remember_token'] = $token;

        $user=user::create($usuario);

        session(['user'=> $user]);
        //Mail::to($usuario['email'])->send(new sendEmail());

        return $request->session()->get('user');

        }catch(Exception $e){
            return response ()->json(['error'=>$e]);
        }
    }

        public function editUser(Request $request)
    {
        $imagen = $request['imagen'];
        $usuario = $request['usuario'];
        $user = Auth::user();
       // return response ()->json(['mensaje'=>$user]);
        $path = " ";
        try{

        $name = $usuario['nombre'] ." ". $usuario['lastName'];
        $fecha = $usuario['año'] ."-".$usuario['mes'] ."-".$usuario['dia'];

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
                    Image::make($exploded[1])->save(public_path('uploads/Usuarios/'. $user -> userName. '/profileImages/' . $filename));

                    }
                    else{
                        $filename="avatar.jpg";
                    }
                    $user -> avatar = $filename;
        }else{}

        if($usuario['password'] != ""){
           $user -> password = bcrypt($usuario['password']);
        }

        // $usuario['avatar'] = $filename;
        //$user -> userName = $usuario['userName'];
        $user -> nombre = $name;
        $user -> email = $usuario['email'];
        $user -> fechaNacimiento = $fecha;
        $user -> genero = $usuario['genero'];
        $user -> tipoUsuario = 'Usuario';
        $user -> activo = 1;
        $user -> bloqueado = 0;
        $user -> privado = 0;
        $user -> save();
        return response ()->json(['mensaje'=>$user]);

        }catch(\Illuminate\Database\QueryException $e){
            return response ()->json(['error'=>$e]);
        }
    }

    public function logOut(Request $request)
    {
		     Auth::logout();
        return redirect('/');
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
