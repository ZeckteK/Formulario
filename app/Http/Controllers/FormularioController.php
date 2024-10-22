<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveFormularioRequest;
use Illuminate\Http\Request;
use App\Models\registro;

class FormularioController extends Controller
{
    //
    public function getFormulario()
    {
        $Registro = registro::all();
        return view('Formulario');
    }
    public function saveFormulario(SaveFormularioRequest $request) {
        $Registro = new registro;
        $Registro->nombre = $request-> get('nombre');
        $Registro->apellido = $request-> get('apellido');
        $Registro->email = $request-> get('email');
        $Registro->telefono = $request-> get('telefono');
        $Registro->contrasena = $request-> get('contrasena');
        $Registro->save();
        return redirect()->route('Formulario');
    }
    public function eliminarFormulario($id) {
        registro::destroy($id);
        return redirect()->route('TablaView');
    }
    public function mostrarFormularios() {
        $registros=registro::all();
        return view('TablaView', compact('registros'));
    }
    public function editarFormulario($id) {
        $registro=registro::find($id);
        return view('TablaEdit', compact('registro'));
    }
    
    public function guardarActualizacion(SaveFormularioRequest $request, $id) {
        $registro=registro::find($id);
        $registro->nombre = $request-> get('nombre');
        $registro->apellido = $request-> get('apellido');
        $registro->email = $request-> get('email');
        $registro->telefono = $request-> get('telefono');
        $registro->contrasena = $request-> get('contrasena');
        $registro->save();
        return redirect()->route('TablaView');
    }
}