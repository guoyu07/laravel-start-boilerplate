<?php
use App\Models\T_Member;
use App\Models\T_Role;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// public routes
Route::get('SignOut', function () {
    Auth::logout();
    return redirect()->route('SignIn');
});
Route::get('SignIn', [
    'as'    =>  'SignIn',
    'uses'  =>  'AccountController@ShowSignIn'
]);
Route::post('SignIn', 'AccountController@ProcessSignin');

// private routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('Project', [
        'as'    =>  'Index',
        'uses'  =>  'ProjectController@Index'
    ]);
});

// 404 redirect
Route::get('{any}', function ($any) {
    if (Auth::check()){
        return redirect()->route('Index');
    } else {
        return redirect()->route('SignIn');
    }
})->where('any', '.*');
