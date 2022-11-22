<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MensajesChat extends Model
{
    use HasFactory;

    protected $table = "mensajesChat";
    protected $primaryKey = "idMensaje";
    public $timestamps = false;

    protected $fillable = [
        'fecha',
        'hora',
        'contenido',
        'idChat',
        'idUsuario'
    ];

    public function user(){
        return $this->belongsTo('App\Models\Usuario');
    }
}
