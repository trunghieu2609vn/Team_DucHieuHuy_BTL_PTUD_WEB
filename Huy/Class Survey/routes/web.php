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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//route admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/getLogin',
            [
                'as'=>'admin.getLogin',
                'uses'=>'Auth\AdminLoginController@showLoginForm'
            ]
    );
    Route::post('/postLogin',
            [
                'as'=>'admin.postLogin',
                'uses'=>'Auth\AdminLoginController@postLogin'
            ]
    );
    Route::get('/home', ['as'=>'admin.home','uses'=>'AdminController@home']);

    Route::post('/logout', ['as'=>'admin.logout','uses'=>'Auth\AdminLoginController@logout']);
}); //end route admin

//route student
Route::group(['prefix' => 'student'], function () {
    Route::get('/getLogin',
            [
                'as'=>'student.getLogin',
                'uses'=>'Auth\StudentLoginController@showLoginForm'
            ]
    );
    Route::post('/postLogin',
            [
                'as'=>'student.postLogin',
                'uses'=>'Auth\StudentLoginController@postLogin'
            ]
    );
    Route::post('/logout',['as'=>'student.logout','uses'=>'Auth\StudentLoginController@logout']);
    
    Route::get('/retrieveAll', ['as'=>'student.retrieveAll', 'uses'=>'StudentController@retrieveAll']);
    
    Route::get('/home', ['as'=>'student.home','uses'=>'StudentController@home']);
}); // end route student


//route teacher
Route::group(['prefix' => 'teacher'], function () {
    Route::get('/getLogin',
            [
                'as'=>'teacher.getLogin',
                'uses'=>'Auth\TeacherLoginController@showLoginForm'
            ]
    );
    Route::post('/postLogin',
            [
                'as'=>'teacher.postLogin',
                'uses'=>'Auth\TeacherLoginController@postLogin'
            ]
    );
    Route::get('/home', ['as'=>'teacher.home','uses'=>'TeacherController@home']);
    
    Route::post('/logout', ['as'=>'teacher.logout','uses'=>'Auth\TeacherLoginController@logout']);
    
}); //end route teacher