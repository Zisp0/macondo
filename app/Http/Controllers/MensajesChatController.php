<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use App\Events\MessageSent;

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
        //broadcast(new MessageSent($msj))->toOthers();
        return $msj;
    }
}
