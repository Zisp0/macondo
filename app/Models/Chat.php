<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = "chat";
    protected $primaryKey = "idChat";
    public $timestamps = false;

    public function users(){
        return $this->belongsToMany('App\Models\Usuario');
    }

    public function messages(){
        return $this->hasMany('App\Models\MensajesChat');
    }
}
