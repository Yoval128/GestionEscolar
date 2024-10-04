<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    protected $table = 'tb_carrera';
    protected $primaryKey = 'id_carrera';
    protected $fillable = [
        'clave',
        'nombre',
        'descripccion',
        'activo'
    ];
}
