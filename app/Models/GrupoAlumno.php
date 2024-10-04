<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Alumno;
use App\Models\Grupo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GrupoAlumno extends Model
{
    use HasFactory;

    protected $table = 'tb_grupo_alumno';
    protected $primaryKey = 'id_grupo_alumno';
    public $timestamps = true;
    protected $fillable = [
        'id_alumno',
        'id_grupo',
        'cuatrimestre'
    ];

    public function AgAlumno()
    {
        return $this->BelongsTo(Alumno::class, 'id_alumno');
    }

    public function AgGrupo()
    {
        return $this->BelongsTo(Grupo::class, 'id_grupo');
    }
}
