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

    public function carrera_alta() {
        return view ('..\carrera_alta');
    }
}
