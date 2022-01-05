<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HorarioController;

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

Auth::routes(['register' => false]);

Auth::routes();

Route::resource('empleado', UserController::class);

Route::resource('empleado.horario', HorarioController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/empleado',[UserController::class,'index'])->name('empleado.index');


Route::get('/empleado.create',[UserController::class,'create'])->name('empleado.create');

Route::post('/empleado.create',[UserController::class,'store'])->name('empleado.create');

Route::get('/empleado.CreateHorario{id}',[HorarioController::class,'create'])->name('empleado.horario.create');

Route::post('/empleado.CreateHorario{id}',[HorarioController::class,'store'])->name('empleado.horario.create');

Route::get('/empleado.horario{id}',[HorarioController::class,'index'])->name('empleado.horario');

Route::delete('/empleado.horario{id}',[HorarioController::class,'destroy'])->name('empleado.horario.delete');