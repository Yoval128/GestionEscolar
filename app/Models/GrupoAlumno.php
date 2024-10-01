<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoAlumno extends Model
{
    use HasFactory;
    protected $table = 'tb_grupo_alumno';
    protected $primaryKey = 'id_grupo_alumno';
    public $timestamps= true;
    protected $fillable =[
        'id_alumno',
        'id_grupo',
        'cuatrimestre'
    ];
}
