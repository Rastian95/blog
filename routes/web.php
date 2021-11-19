<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//Route::get('/', function () {6
//    return view('welcome');
//})->name('home');

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('categorias/{categoria}', [PostController::class, 'categoria'])->name('posts.categoria');

Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('prueba', function() {
   return 'Has accedido correctamente a esta ruta';
})->middleware(['auth:sanctum','age']);

Route::get('no-autorizado', function(){
   return 'usted no es mayor de edad';
});

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
