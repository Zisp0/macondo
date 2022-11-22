<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //use HasFactory;

    protected $table = "usuarios";
    protected $primaryKey = "idUsuario";
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'apellido',
        'seudonimo',
        'estado',
        'rol',
        'foto',
        'token',
        'correo',
        'contrasena'
    ];

    public function chats(){
        return $this->belongsToMany('App\Models\Chat');
    }

    public function messages(){
        return $this->hasMany('App\Models\MensajesChat');
    }
}
