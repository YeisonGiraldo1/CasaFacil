<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


//Contact
Route::get('/contacto', [App\Http\Controllers\ContactController::class, 'loadview'])->name('contact');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Publications
Route::get('/crear/publicacion', [App\Http\Controllers\PublicationsController::class, 'create'])->name('publications');
Route::post('/registrar/publicacion', [App\Http\Controllers\PublicationsController::class, 'register_publication'])->name('registerpublications');

//Show Publications
Route::get('/', [App\Http\Controllers\PublicationsController::class, 'showPublicationsWelcome'])->name('welcome');
Route::get('/home', [App\Http\Controllers\PublicationsController::class, 'showPublicationsHome'])->name('home');

Route::post('/register_publication', 'PublicationsController@register_publication')->middleware('auth');
Route::get('/perfil', [App\Http\Controllers\ProfileController::class, 'loadviewprofile'])->name('profile');
Route::get('/actualizar/perfil', [App\Http\Controllers\ProfileController::class, 'loadviewupdateprofile'])->name('update.profile');
Route::post('/actualizar/perfil', [App\Http\Controllers\ProfileController::class, 'updatedata'])->name('update.data');