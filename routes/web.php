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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::delete('deletePost/{id}', "ContentController@deletePost");

Route::resource('User','UserController');

Route::group(['middleware'=>'auth:api'], function(){
    Route::post('/prueba',function(){
        return view('AdminPage');
    });
});

Route::group(['middleware'=>'VerifyCsrfToken'], function(){
    Route::post('/CsrfTest',function(){
        return view('AdminPage');
    });
});

Route::get('email', function () {
    return view('Email');
});

Route::get('home', function () {
    return view('Home');
});

Route::get('prueba', function () {
    return view('Prueba');
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

Route::get('editProfile/{id}', function () {
    return view('EditProfile');
});

Route::get('followers', function () {
    return view('Followers');
});

Route::get('follows', function () {
    return view('Follows');
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

Route::get('singlePost/{id}', function ($id) {
    return view('SinglePost');
});

Route::get('profile/{id}', function ($id){
    return view('Profile');
});

Route::get('editPost/{id}', function ($id){
    return view('EditPost');
});

Route::get('uploadPost', function () {
    return view('UploadPost');
});

// Route::get('deletePost/{id}', function ($id){
//     return view('Profile');
// });

//Route::prefix('/app/Http/Controllers')->group(function () {
//    Route::get('/vueLogin', 'UserController@login');
//});

Route::post("/vueLogin","UserController@login");

Route::post("/vueLoginStatus","UserController@statusLogin");

Route::put("/vueRegisterUser","UserController@registerUser");

Route::get("/vueLoadProfile/{id}", "UserController@loadProfile");

Route::put("/vueEditProfile","UserController@editUser");

Route::get("/vueLogOut","UserController@logOut");

Route::get("/vueGetProfileImage/{userName}/{name}","ContentController@getProfileImage");

Route::post("/vueHomeContents","ContentController@homeContents");

Route::post("/vueContentUserProfile","ContentController@userContents");

Route::post("/vueUploadContent","ContentController@uploadPost");

Route::post("/vueEditContent","ContentController@editPost");

Route::delete("/vueDeleteContent/{id}","ContentController@deletePost");

Route::post("/vueLoadSinglePost/{id}","ContentController@loadSinglePost");

Route::get("/vueGetContentImage/{userName}/{name}","ContentController@getContentImage");

// Route::get("/content/{id}","ContentController@loadSinglePost"){
//   return view('SinglePost');
// };

Route::post("/vueSearchContent","SearchController@searchContent");

Route::get("/vueSearchTitle/{busqueda}","SearchController@searchTitleContents");

Route::post("/vueSearchDesc","SearchController@searchDescriptionContents");

Route::post("/vueSearchDate","SearchController@searchDateContents");

Route::post("/vueLikePost","ContentController@likePost");

Route::post("/vueCommentPost","ContentController@commentPost");

Route::post("/vuePostCount/{id}","UserController@postCount");

//Route::post('indexPrueba','User@login');

//Route::post('login',array('uses' =>'User@login'));

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/home', 'HomeController@index')->name('home');
