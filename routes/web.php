<?php
use App\Http\Controllers\crudController;
use App\Http\Controllers\maestrosController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\tablaController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', function () {
    return view('tareas.index');
})->name('alumnos.index');

Route::get('/home/alumnos', function () {
    return view('tareas.index');
})->name('alumnos.index');


Route::get('/home/maestros', function () {
    return view('tareas.maestros');
})->name('maestros.index');

Route::get('/home/registro', function () {
    return view('tareas.registro');
})->name('registro.index');

Route::get('/home/tablaAlumnos', function () {
    return view('tareas.tablaAlumnos');
})->name('tablaAlumnos');

Route::post('/home/alumnos', [CrudController::class, 'store'])->name('alumnos');
Route::post('/home/maestros', [maestrosController::class, 'store'])->name('maestros');
Route::post('/home/registro', [registerController::class, 'store'])->name('registro');
Route::get('/home/tablaAlumnos', [tablaController::class, 'store'])->name('tablaAlumnos'); 

/* Route::post('/home/tablaAlumnos', [tablaController::class, 'store'])->name('tablaAlumnos'); */