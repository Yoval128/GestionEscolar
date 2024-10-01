<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\Session;
use App\Models\GrupoAlumno;
use App\Models\Alumno;
use App\Models\Grupo;

class GrupoAlumnoController extends Controller
{
    public function asignacion()
    {

        return view('asignacion')
            ->with(['grupo' => Grupo::all()])
            ->with(['alumno' => Alumno::all()])
            ->with(['asignaciones' => GrupoAlumno::all()]);
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
