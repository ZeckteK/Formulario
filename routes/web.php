<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('formulario',[FormularioController::class,'getFormulario'])->name('Formulario');
Route::POST('guardar/registro',[FormularioController::class,'saveFormulario']);
Route::get('tabla/formu',[FormularioController::class,'mostrarFormularios'])->name('TablaView');
Route::delete('tabla/eliminar/formu/{id}',[FormularioController::class,'eliminarFormulario'])->name('eliminarFormulario');
Route::get('tabla/editar/formu/{id}',[FormularioController::class,'editarFormulario'])->name('editarFormulario');
Route::PUT('tabla/actualizar/formu/{id}',[FormularioController::class,'guardarActualizacion'])->name('guardarActualizacion');