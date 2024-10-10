<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarreraGrupo extends Model
{
    use HasFactory;
    protected $table = 'tb_carrera_grupo';
    protected $primaryKey = 'id_carrera_grupo';
    protected $fillable = [
        'id_carrera',
        'id_grupo',
        'activo',
    ];


    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'id_carrera');
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'id_grupo');
    }

}
