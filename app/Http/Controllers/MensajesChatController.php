<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class MensajesChatController extends Controller
{
    public function sent(Request $request){
        $msj = array(
            "fecha" => $request->fecha,
            "hora" => $request->hora,
            "contenido" => $request->contenido,
            "idChat" => $request->idChat,
            "idUsuario" => session('id')
        );

        DB::insert("INSERT INTO mensajesChat (fecha, hora, contenido, idChat, idUsuario) VALUES ('".$request->fecha."', '".$request->hora."', '".$request->contenido."', ".$request->idChat.", ".session('id').")");
        
        return $msj;
    }

    public function get(Request $request){
        $mensajes = DB::table('mensajesChat')
            ->where('idChat', $request->idChat)
            ->orderBy('idMensaje', 'asc')
            ->get();
        $datos = array(
            "idUsuario" => session('id'),
            "mensajes" => $mensajes
        );
        return $datos;
    }

    public function last(Request $request){
        $mensajes = DB::table('mensajesChat')
            ->where('idChat', $request->idChat)
            ->where('idMensaje', '>', $request->ultimo)
            ->orderBy('idMensaje', 'asc')
            ->get();
        $datos = array(
            "idUsuario" => session('id'),
            "mensajes" => $mensajes
        );
        return $datos;
    }
}
