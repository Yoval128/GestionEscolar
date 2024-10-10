<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarreraGrupo;
use App\Models\Carrera;
use App\Models\Grupo;
use App\Models\Alumno;

use App\Http\Controllers\DB;

class CarreraGrupoController extends Controller
{
    public function carrera_grupo()
    {
        $query = \DB::select("SELECT cg.id_carrera_grupo AS id, c.clave AS carrera_clave, c.nombre AS carrera, 
        g.clave AS grupo_clave, g.nombre AS grupo
        FROM tb_carrera AS c, tb_grupo AS g, tb_carrera_grupo AS cg
        WHERE c.id_carrera = cg.id_carrera AND g.id_grupo = cg.id_grupo");

        return view('carrera_grupo')
            ->with(['alumno' => Alumno::all()])
            ->with(['carreras' => Carrera::all()])
            ->with(['grupos' => Grupo::all()])
            ->with(['carrera_grupo' => CarreraGrupo::all()])
            ->with(['datos' => $query]);
    }



    public function carrera_grupo_registrar(Request $request)
    {
        CarreraGrupo::create([
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
