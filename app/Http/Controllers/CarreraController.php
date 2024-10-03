<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\Session;
use App\Models\Carrera;

class CarreraController extends Controller
{
    public function carrera()
    {
        return view('carrera')->with(['carrera' => Carrera::all()]);
    }

    public function carrera_alta()
    {
        return view('carrera_alta');
    }

    public function carrera_registrar(Request $request)
{
    $this->validate($request, [
        'clave' => 'required',
        'nombre' => 'required',
        'descripccion' => 'required',
        'activo' => 'nullable|boolean'
    ]);

    Carrera::create([
        'clave' => $request->input('clave'),
        'nombre' => $request->input('nombre'),
        'descripccion' => $request->input('descripccion'),
        'activo' => $request->input('activo') ? 1 : 0,
    ]);

    return redirect()->route('carrera');
}

    public function carrera_editar(Carrera $id)
    {
        return view('carrera_editar')->with('carrera', $id);
    }

    public function carrera_actualizar(Request $request, Carrera $id)
    {
        $this->validate($request, [
            'clave' => 'required',
            'nombre' => 'required',
            'descripccion' => 'required',
            'activo' => 'nullable|boolean'
        ]);

        $id->update([
            'clave' => $request->input('clave'),
            'nombre' => $request->input('nombre'),
            'descripccion' => $request->input('descripccion'),
            'activo' => $request->input('activo') ? 1 : 0,
        ]);

        return redirect()->route('carrera');
    }

    public function carrera_borrar(Carrera $id)
    {
        $id->delete();
        return redirect()->route('carrera');
    }
}
