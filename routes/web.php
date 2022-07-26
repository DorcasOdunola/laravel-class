<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;

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

// Route::get('/index', function (){
//     return view('index');
// });

Route::get('/about', function (){
    return view('about');
});


// Route::get('/index', [UserController::class, "index"]);

Route::get('/todo', [TodoController::class, "index"])->name("todo.index");

Route::get('/todo/create', [TodoController::class, "create"]);

Route::post('/todo/create', [TodoController::class, "store"]);

Route::get('/todo/edit/{id}', [TodoController::class, "edit"])->name("todo.edit");


Route::post('/todo/edit/{id}', [TodoController::class, "update"]);

Route::get('/todo/{id}', [TodoController::class, "destroy"]);


// Route::get('/todo/{id}', [TodoController::class, "edit"])->where('id', '[0-9]+');
// Route::get('/todo/{name}', [TodoController::class, "edit"])->where('name', '[A-Za-z]+');

// Route::get('/todo/{id}', [TodoController::class, "edit"])->whereNumber('id');
// Route::get('/todo/{name}', [TodoController::class, "edit"])->whereAlpha('name');

// Group Route
// Route::prefix('/todo')->group(function () {
//     Route::get('/', [TodoController::class, "index"]);

//     Route::get('/create', [TodoController::class, "create"]);

//     Route::post('/create', [TodoController::class, "store"]);

//     Route::get('/edit/{id}', [TodoController::class, "edit"])->where('id', '[0-9]+');


//     Route::post('/edit/{id}', [TodoController::class, "update"]);

//     Route::get('/{id}', [TodoController::class, "destroy"]);

// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
