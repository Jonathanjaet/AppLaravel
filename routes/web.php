<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmpleadoController;

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
    return view('auth.login'); 
});

/**Route::get('/empleado', function () {
    return view('empleado.index');
});
Route::get('/empleado/create', [EmpleadoController::class, 'create']);
*/

Route::resource('empleado',EmpleadoController::class);

Auth::routes();

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');//direccionamiento al CRUD

Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', [EmpleadoController::class, 'index'])->name('home');
    
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');