<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Chat;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function show(Chat $chat){
        if($chat->users->contains(session('id'))){
            return 'si señor';
        }
        
        return 'no señor';
    }

    public function chatWith(Usuario $usuario){
        $user1 = session('id');
        $user2 = $usuario;

        $chat = DB::select("select `chat`.*, `chatUsers`.`idUsuario` as `pivot_usuario_idUsuario`, `chatUsers`.`idChat` as `pivot_chat_idChat` from `chat` inner join `chatUsers` on `chat`.`idChat` = `chatUsers`.`idChat` where `chatUsers`.`idUsuario` = ".$user2->idUsuario." and exists (select * from `usuarios` inner join `chatUsers` on `usuarios`.`idUsuario` = `chatUsers`.`idUsuario` where `chat`.`idChat` = `chatUsers`.`idChat` and `chatUsers`.`idUsuario` = ".$user1.")");
        
        
        if(!$chat){
            $chat = \App\Models\Chat::create([]);

            DB::insert('INSERT INTO chatUsers (idUsuario, idChat) VALUES ('.$user1.', '.$chat->idChat.')');
            DB::insert('INSERT INTO chatUsers (idUsuario, idChat) VALUES ('.$user2->idUsuario.', '.$chat->idChat.')');
        }

        return 'hecho';
    }
}
