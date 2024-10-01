<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table = 'tb_grupo';
    protected $primaryKey = 'id_grupo';
    public $timestamps = true;
    protected $fillable = [
        'clave',
        'nombre'
    ];
}
