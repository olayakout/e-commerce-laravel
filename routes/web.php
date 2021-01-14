<?php

use App\Department;
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

/*
| My Notes
|---------------------------------------------------------------------------
| to list all routes in our project 
|---------------------------------------------------------------------------
| php artisn route:list
| 
|---------------------------------------------------------------------------
| to define url as variable 
|---------------------------------------------------------------------------
| Route::get("admin/posts/example",array("as"=>"admin.posts" ,function(){
|   $url=route('admin.posts');
|   return $url; // it will return http://e-commerce.local/admin/posts/example
|}));
|
*/

// Route::get("admin/posts/example",array("as"=>"admin.posts" ,function(){
//     $url=route('admin.posts');
//     return $url; // it will return http://e-commerce.local/admin/posts/example
// }));

Auth::routes();


// Route::get('/', function () {
//     $departments=Department::all();
//     return view('welcome')->with('departments',$departments);
// });

//to create controller with all credintials -> php artisan make:controller --resources PostController
Route::resource('/post','PostController');
Route::get('/showall/{id}', 'PostController@show_all');


//to create controller without credintials -> php artisan make:controller HomeController
Route::get('/', 'HomeController@index')->name('home');

Route::get('profile', function () {
    // Only authenticated users may enter...
})->middleware('auth');
