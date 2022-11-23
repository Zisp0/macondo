<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    //
    public function comentar(Request $request){
        $comentario = new Comentario;
        $comentario->contenido = $request->contenido;
        $comentario->estado = "activa";
        $comentario->fecha = $request->fecha;
        $comentario->hora = $request->hora;
        $comentario->idUsuario = session('id');
        $comentario->idPublicacion = $idPublicacion;
        $comentario->save();


        //DB::insert("INSERT INTO publicacion (estado, fecha, hora, contenido, idUsuario, idCategoria) VALUES ('activa', '".$request->fecha."', '".$request->hora."', '".$request->contenido."', ".session('id').", ".$idCategoria.")");
        
        return $comentario;
    }

    public function cargar(Request $request){
        $comentarios = DB::table('comentario')
            ->where('estado', 'activa')
            ->where('idPublicacion', $request->idPublicacion)
            ->orderBy('idComentario', 'desc')
            ->get();
        $datos = array(
            "comentarios" => $comentarios
        );
        return $datos;
    }
}
