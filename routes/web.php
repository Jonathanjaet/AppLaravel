<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;

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

/* Route::get('/empleado', function () {
    return view('empleado.index');
});
Route::get('/empleado/create'),[AppController::class, 'create']);
*/

Route::resource('empleado', AppController::class);

Auth::routes();

/*Route::get('/home', [AppController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', [AppController::class, 'index'])->name('home');
})*/
