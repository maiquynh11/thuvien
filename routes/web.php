<?php

use App\Http\Controllers\permissionController;
use App\Permission;
use Illuminate\Support\Facades\Route;

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




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');
Route::group(['middleware' => ['auth']], function() {
    Route::get('/','usercontroller@index')->name('homepage');
    Route::resource('roles','RoleController');
    Route::resource('users','usercontroller');
    Route::resource('permissions','permissionController');
    Route::resource('dausachs','DausachController');
     Route::resource('loaisachs','LoaisachController');


});
route::get('profile','HomeController@profile')->name('profile');
route::post('profile-update','HomeController@profileUpdate')->name('profile-update');


// route::get('register',function(){
//     return view('auth.register');
// });

            // route::get('users/{id}',function($id)
            // {
            //     return 'users'.$id;
            // });