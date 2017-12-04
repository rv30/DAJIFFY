<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserModel;
use App\User;

use Auth;
use DB;



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
        //return view('index'); 
        //$data=['nomnbre'=>'carlos',];
        //user::create($data);
    }
    /*
    public function login10(Request $request)
    {	
    	// $emailLog = $request->get("email");
        $passLog = $request['pass'];
        $emailLog = $request['email'];

        
        if (Auth::check()) {
            return 'logeado';
        }
         else {
            return 'No log';
         }

    	//$user=user::where('correo','=',$emailLog)->where('pass','=',);
    	$user = Auth::user();
    	$usersNot= user::where('id','=',$user->id)->with('notifications')->get();
    	
    	$users= user::get();

    	return response()->json(['user'=>$passLog]);
    }
    */
    public function login(Request $request)
    {   
        //$input = Request::only('correo','contrasenia');
        //$emailLog = $input['correo'];
        //$passLog = $input['contrasenia'];

        //$array = array("json"=>"ok esto es un json");
        //return json_encode($array);

        //return view('Notifications'); 
        ////////////////////////////////////////////////////////////////////////////
    
        //$usuario = new Usuario();
        //$usuario->nombre='yolo';
        //$usuario->save();
        
        $user = new User();
        try{
            $user = DB::table('user')->where([
            ['email', '=', $request->email],
            ['password', '=', $request->pass],
        ])->get();

        $request->session()->forget('user');
        session(['user'=> $user]);

        return $request->session()->get('user');
        /*
        $result = json_decode(json_encode($user),true)[0];
                $idLog = $result['id'];
                $nameLog = $result['userName'];
                $emailRes = $result['email'];
                $passRes = $result['password'];

        session(['userId' => $idLog]);
        session(['userName'=> $nameLog]);
        //session(['user'=> $user]);
        return $user;
        */
        }catch(\Illuminate\Database\QueryException $e){
            dd($e->getMessage());
        }
    
        /*
        $passLog = $request.usuario.pass;
        $emailLog = $request.usuario.email;

        try{
            $selectUser = DB::select('select id,correo,contrasenia from user where correo = ?',[$emailLog]);
            return json_encode($selectUser);

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
                    return view('Home');

                }else{
                    return "Correo o contraseña incorrecta";
                }
                }else{
                return view('Login');
            }
            
        }catch(\Illuminate\Database\QueryException $e){
            dd($e->getMessage());
        }
        */


        ///////////////////////////////////////////////////////////////////////////////
        /*
        $passLog = $request['pass'];
        $emailLog = $request['email'];
		//$user = new UserModel();
			$user = DB::table('User')->where([
				['correo', '=', $request->correo],
				['contrasenia', '=', $request->contrasenia],
			])->get();

		$request->session()->forget('user');
		session(['user'=> $user]);

		//return $request->session()->get('user');
		return Redirect::to('notificaciones');
        */       														
    }

    public  function statusLogin(Request $request){
        $user =  $request->session()->get('user');
        return $user;
    }

    public function registerUser(Request $request)
    {
        $user = new User();
        $path = "";

        try{

        $name = $request->name ." ". $request->lastName;

        if($request->hasFile('profile')){
            $file = $request->file('profile');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('imagesUser/' . $filename);
            Image::make($file->getRealPath())->resize(200, 200)->save($path);
            //$user->avatar = $filename;
            //$user->save();
        }
        // DB::table('user')->insert(
        //     ['nombre' => $name, 'userName' => $request->userName, 'email' => $request->email, 'password' => $request->password, 'fechaNacimiento' => $request->birth, 
        //      'genero' => $request->gender, 'avatar' => $path, 'portada' => NULL, 'tipoUsuario' => 0, 'privado' => 0, 'activo' => 1, 'bloqueado' => 0, 'idCiudad' => 1 ]
        // );

        $user->nombre = $name;
        $user->userName = $request->userName;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->fechaNacimiento = $request->birth;
        $user->genero = $request->gender;
        $user->avatar = $path;
        $user->tipoUsuario = 'Usuario';
        $user->privado = 0;
        $user->activo = 1;
        $user->bloqueado = 0;
        //$user->idCiudad = 1;  
        $user->save();

        $request->session()->forget('user');
        session(['user'=> $user]);

        return $request->session()->get('user');

        }catch(\Illuminate\Database\QueryException $e){
            dd($e->getMessage());
        }
        /*
		$input = Request::only('nombre','correo','contrasenia','fechaNacimiento','avatar','portada','idCiudad');
        $nameReg = $input['nombre'];
        $emailReg = $input['correo'];
        $passReg = $input['contrasenia'];

        $passRegHash = password_hash($passReg, PASSWORD_DEFAULT);

        $dateReg = $input['fechaNacimiento'];
        $genderReg = $input['genero'];
        //$profileReg = $input['avatar'];
        //$bannerReg = $input['portada'];
        $typeReg = 1;
        $privateReg = 0;
        $activeReg = 1;
        $blockReg = 0;  
        $cityReg = $input['idCiudad'];

        if(isset($input['avatar']))
            {
	            $file_tmp_Avatar =$input['avatar']['tmp_name'];
	            $file_type_Avatar=$input['avatar']['type'];
	            $file_ext_Avatar=strtolower(end(explode('.',$input['avatar']['name'])));
	            $imageAvatar = file_get_contents($file_tmp_Avatar);
	            if($file_type_Avatar == 'image/jpeg' || $file_type_Avatar == 'image/png' || $file_type_Avatar == 'image/bmp')
	            {
	            $base64avatar = 'data:image/' . $file_ext_Avatar . ';base64,' . base64_encode($imageAvatar);
	            $file_type_Avatar = "Imagen";
            }
        }
            
        if(isset($input['portada']))
            {
	            $file_tmp_Portada =$input['portada']['tmp_name'];
	            $file_type_Portada=$input['portada']['type'];
	            $file_ext_Portada=strtolower(end(explode('.',$input['portada']['name'])));
	            $imagePortada = file_get_contents($file_tmp_Portada);
	            if($file_type_Portada == 'image/jpeg' || $file_type_Portada == 'image/png' || $file_type_Portada == 'image/bmp')
	            {
	            $base64portada = 'data:image/' . $file_ext_Portada . ';base64,' . base64_encode($imagePortada);
	            $file_type_Portada = "Imagen";
            } 
        }
	        try{
		        DB::table('users')->insert([
		    	['nombre' => $nameReg],
		    	['correo' => $emailReg],
		    	['contrasenia' => $passRegHash],
		    	['fechaNacimiento' => $dateReg],
		    	['genero' => $genderReg],
		    	['avatar' => $base64avatar],
		    	['portada' => $base64portada],
		    	['tipoUsuario' => $typeReg],
		    	['privado' => $privateReg],
		    	['activo' => $activeReg],
		    	['bloqueado' => $blockReg],
		    	['idCiudad' => $cityReg]
	    	]);

    	return Redirect::to('notificaciones');

    	}catch(\Illuminate\Database\QueryException $e){
            dd($e->getMessage());
        } 
        */
    }

    public function logOut(Request $request)
    {
		//$user = $request->session()->get('user')
		//$request->session()->flush('user');
		//return Redirect::to('notificaciones');       														
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
