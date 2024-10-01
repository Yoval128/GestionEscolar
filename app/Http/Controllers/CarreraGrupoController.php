<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\Session;
use App\Models\CarreraGrupo;


class CarreraGrupoController extends Controller
{
    public function carrera_grupo()
    {
        return view('carrera_grupo')->with(['carrera_grupo' => CarreraGrupo::all()]);
    }

    public function carrera_grupo_alta() {
        return view ('carrera_grupo_alta');
    }
}
