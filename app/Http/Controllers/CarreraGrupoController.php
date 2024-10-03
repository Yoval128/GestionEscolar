<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarreraGrupo;
use App\Models\Carrera;
use App\Models\Grupo;
use App\Models\Alumno;

class CarreraGrupoController extends Controller
{
    public function carrera_grupo()
    {
        return view('carrera_grupo')
            ->with(['alumno' => Alumno::all()])
            ->with(['carreras' => Carrera::all()])
            ->with(['grupos' => Grupo::all()])
            ->with(['carrera_grupo' => CarreraGrupo::all()]);
    }

    public function carrera_grupo_registrar(Request $request)
    {
        CarreraGrupo::create([
            'id_alumno' => $request->input('id_alumno'),
            'id_carrera' => $request->input('id_carrera'),
            'id_grupo' => $request->input('id_grupo'),
            'activo' => $request->input('activo', 0), 
        ]);
    
        return redirect()->route('carrera_grupo');
    }
    
    public function carrera_grupo_borrar(CarreraGrupo $id)
    {
        $id->delete();
        return redirect()->route('carrera_grupo');
    }
}
