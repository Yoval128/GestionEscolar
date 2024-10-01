<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarreraGrupo extends Model
{
    use HasFactory;
    protected $table = 'tb_carrera';
    protected $primaryKey = 'id_carrera_grupo';
    protected $fillable = [
        'id_carrera',
        'id_grupo',
        'activo',
    ];
}
