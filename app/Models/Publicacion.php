<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

    protected $table = "publicacion";
    protected $primaryKey = "idPublicacion";
    public $timestamps = false;
    protected $fillable = [
        'estado',
        'fecha',
        'hora',
        'titulo',
        'contenido',
        'idUsuario',
        'idCategoria'
    ];
}
