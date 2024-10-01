<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\Session;
use App\Models\Grupo;

class GrupoController extends Controller
{

    public function grupo()
    {
        return view('grupo')->with(['grupo' => Grupo::all()]);
    }

    public function grupo_alta()
    {
        return view('grupo_alta');
    }

    public function grupo_registrar(Request $request)
    {
        $this->validate($request, [
            'clave' => 'required',
            'nombre' => 'required'
        ]);
 
        Grupo::create(array(
            'clave' => $request->input('clave'),
            'nombre' => $request->input('nombre'),
        ));

        return redirect()->route('grupo');
    }


    public function grupo_editar(Grupo $id)
    {
        return view('grupo_editar')->with('grupo', $id);
    }

    public function grupo_actualizar(Request $request, Grupo $id)
    {
        $this->validate($request, [
            'clave' => 'required',
            'nombre' => 'required'
        ]);

        $id->update([
            'clave' => $request->input('clave'),
            'nombre' => $request->input('nombre'),
        ]);

        return redirect()->route('grupo');
    }

    public function grupo_borrar(Grupo $id)
    {
        $id->delete();
        return redirect()->route('grupo');
    }
}
