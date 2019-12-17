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

// Route::get('/t', function () {
//     return view('auth/login1');
// });
Route::get('/tt', function () {
    return view('rules');
});

//New Working Routes (Multi auth)
Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>['web','auth']],function(){
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', function () {
        if(Auth::user()->role==1){
        return view('auth/home');
    }
    else if(Auth::user()->role==2){
        return view('teacher/home');
    }
    else{
        return view('home');
    }
    });
    
});
Auth::routes();

// Route::get('/teacher/home', ['middleware'=>['auth','teacher'],'uses'=>'TestController@index'])->name('home');
Route::get('/registeradmin',['middleware'=>['auth','admin'],'uses'=>'PagesController@index']);
// Route::get('/home', ['middleware'=>['auth','student'],'uses'=>'HomeController@index'])->name('home');
Route::resource('users','TeacherController');
Route::get('/addteacher',['middleware'=>['auth','admin'],'uses'=>'PagesController@addteacher']);