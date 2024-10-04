<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;
use App\Models\GrupoAlumno;
use App\Models\Alumno;
use App\Models\Grupo;
use App\Http\Controllers\DB;

class GrupoAlumnoController extends Controller
{
    public function asignacion()
    {
        $query = \DB::select("SELECT gce.id_grupo_alumno AS id, gce.cuatrimestre, gru.clave,
        gru.nombre AS grupo, alu.nombre AS alumno
        FROM tb_alumno AS alu, tb_grupo AS gru, tb_grupo_alumno AS gce
        WHERE alu.id_alumno = gce.id_alumno AND gru.id_grupo = gce.id_grupo");


        return view('asignacion')
            ->with(['grupo' => Grupo::all()])
            ->with(['alumno' => Alumno::all()])
            ->with(['asignaciones' => GrupoAlumno::all()])
            ->with(['datos' => $query]);
    }

    public function asignacion_registrar(Request $request)
    {

        GrupoAlumno::create(array(
            'id_alumno' => $request->input('id_alumno'),
            'id_grupo' => $request->input('id_grupo'),
            'cuatrimestre' => $request->input('cuatrimestre')
        ));

        return redirect()->route('asignacion');
    }

    public function asignacion_borrar(GrupoAlumno $id)
    {
        $id->delete();
        return redirect()->route('asignacion');
    }
}
