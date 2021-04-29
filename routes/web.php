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

//METRONIC
// Demo routes
//Route::get('/datatables', [\App\Http\Controllers\PagesController::class, 'datatables']);
//Route::get('/ktdatatables', 'PagesController@ktDatatables');
//Route::get('/select2', 'PagesController@select2');
//Route::get('/jquerymask', 'PagesController@jQueryMask');
//Route::get('/icons/custom-icons', 'PagesController@customIcons');
//Route::get('/icons/flaticon', 'PagesController@flaticon');
//Route::get('/icons/fontawesome', 'PagesController@fontawesome');
//Route::get('/icons/lineawesome', 'PagesController@lineawesome');
//Route::get('/icons/socicons', 'PagesController@socicons');
//Route::get('/icons/svg', 'PagesController@svg');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', [\App\Http\Controllers\PagesController::class, 'quickSearch'])->name('quick-search');
