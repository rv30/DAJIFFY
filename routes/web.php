<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::resource('index','User',
	['only' => ['index','create','store']]);
*/
Route::delete('deletePost/{id}', "ContentController@deletePost");

Route::resource('User','UserController');

Route::group(['middleware'=>'auth:api'], function(){
    Route::post('/prueba',function(){
        return view('AdminPage');
    });
});
Route::get('/', function () {
    return view('Login');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('login1', function () {
    return view('Login');
});

Route::get('adminPage', function () {
    return view('AdminPage');
});

Route::get('banUser', function () {
    return view('BanUser');
});

Route::get('editPost', function () {
    return view('EditPost');
});

Route::get('editProfile', function () {
    return view('EditProfile');
});

Route::get('followers', function () {
    return view('Followers');
});

Route::get('follows', function () {
    return view('Follows');
});

Route::get('home', function () {
    return view('Home');
});

Route::get('landingPage', function () {
    return view('LandingPage');
});

Route::get('notifications', function () {
    return view('Notifications');
});

Route::get('profile', function () {
    return view('Profile');
});

Route::get('resetPassword', function () {
    return view('ResetPassword');
});

Route::get('search', function () {
    return view('Search');
});

Route::get('singlePost', function () {
    return view('SinglePost');
});

Route::get('uploadPost', function () {
    return view('UploadPost');
});

Route::get('profile/{id}', "UserController@loadProfile");

//Route::prefix('/app/Http/Controllers')->group(function () {
//    Route::get('/vueLogin', 'UserController@login');
//});

Route::post("/vueLogin","UserController@login");

Route::post("/vueLoginStatus","UserController@statusLogin");

Route::post("/vueContentUserProfile","ContentController@userContents");

Route::post("/vueUploadContent","ContentController@uploadPost");

Route::put("/vueRegisterUser","UserController@registerUser");

Route::post("/vueSearchContent","SearchController@searchContent");

//Route::post('indexPrueba','User@login');

//Route::post('login',array('uses' =>'User@login'));

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
