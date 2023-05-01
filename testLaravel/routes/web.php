<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Math\RoundingMode;

// use App\Http\Controllers\UserController;
// Generating URLs...
// $url = route('profile');

// Generating Redirects...
// return redirect()->route('profile');

// return to_route('profile');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// @Invoice
Route::get('/admin/create_invoice',function(){
    return view('admin.create_invoice');
});
Route::get('/admin/manage_invoice',function(){
    return view('admin.manage_invoice');
});
// @Custoemr
Route::get('/admin/create_customer',function(){
    return view('admin.create_customer');
});
Route::get('/admin/manage_customer',function(){
    return view('admin.manage_customer');
});
// @Product
Route::get('/admin/create_product',function(){
    return view('admin.create_product');
});
Route::get('/admin/manage_product',function(){
    return view('admin.manage_product');
});


Route::get('/', function () {
    return view('admin.layouts.master');
});

























//-----------------------------------------------Available Router Methods
// //Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// Route::get('/greeting', function () {
//     return 'Hello World';
// });


// Route::get('/user', [UserController::class, 'index']);
// Route::get('/', function () {
//     return view('index');
// });
// Route::redirect('/here', '/there');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
// Route::get('/user/{id}', function (string $id) {
//     return 'User '.$id;
// });

//Required Parameters
// Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
//     // ...
// });

// ----------------Parameters & Dependency Injection
// use Illuminate\Http\Request;

// Route::get('/user/{id}', function (Request $request, string $id) {
//     return 'User '.$id;
// });

//--------------------------------Optional Parameters
// Route::get('/user/{name?}', function (string $name = null) {
//     return $name;
// });

// Route::get('/user/{name?}', function (string $name = 'John') {
//     return $name;
// });
//-------------------------------Regular Expression Constraints
// Route::get('/user/{name}', function (string $name) {
//     return $name;
//     // ...
// })->where('name', '[A-Za-z]+');

// Route::get('/user/{id}', function (string $id) {
//     // ...
//     return $id;

// })->where('id', '[0-9]+');

// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     // ...
//     return $id.$name;


// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     return $id.$name;
// })->whereNumber('id')->whereAlpha('name');

// Route::get('/user/{name}', function (string $name) {
//     // ...
// })->whereAlphaNumeric('name');

// Route::get('/user/{id}', function (string $id) {
//     // ...
// })->whereUuid('id');

// Route::get('/user/{id}', function (string $id) {
//     //
// })->whereUlid('id');

// Route::get('/category/{category}', function (string $category) {
//     // ...
//     return $category;
// })->whereIn('category', ['movie', 'song', 'painting']);

//----------------------------------------
// Route::get('/search/{search}', function (string $search) {
//     return $search;
// })->where('search', '.*');
//-----------------------
