<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
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
Route::group(['middleware' => ['auth']], function () {
Route::get('/crear/publicacion', [App\Http\Controllers\PublicationsController::class, 'create'])->name('publications');
Route::post('/registrar/publicacion', [App\Http\Controllers\PublicationsController::class, 'register_publication'])->name('registerpublications')->middleware('auth');
});

//Show Publications
Route::get('/', [App\Http\Controllers\PublicationsController::class, 'showPublicationsWelcome'])->name('welcome');
Route::get('/home', [App\Http\Controllers\PublicationsController::class, 'showPublicationsHome'])->name('home');

//Profile
Route::get('/perfil', [App\Http\Controllers\ProfileController::class, 'loadviewprofile'])->name('profile');
Route::get('/actualizar/perfil', [App\Http\Controllers\ProfileController::class, 'loadviewupdateprofile'])->name('update.profile');
Route::post('/actualizar/perfil', [App\Http\Controllers\ProfileController::class, 'updatedata'])->name('update.data');


Route::get('/detalle/{id}/propiedad', [App\Http\Controllers\PublicationsController::class, 'propertydetail'])->name('detail.property');

Route::get('/buscar-propiedad',[App\Http\Controllers\PublicationsController::class,'propertysearch'])->name('property.search');

Route::get('/buscar-propiedad',[App\Http\Controllers\PublicationsController::class,'propertysearch'])->name('property.search');

Route::get('/listar/propiedades', [App\Http\Controllers\PublicationsController::class, 'listpublications'])->name('list.publications');


Route::get('/elimina/{id}', [App\Http\Controllers\PublicationsController::class, 'delete'])->name('delete.publications');