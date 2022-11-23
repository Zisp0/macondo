<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use Illuminate\Support\Facades\DB;

class PublicacionController extends Controller
{
    //
    public function postear(Request $request){
        $idCategoria = DB::select("select `idCategoria` from `categoria` where `nombre` = `".$request->categoria."`");
        
        $publicacion = new Publicacion;
        $publicacion->estado = "activa";
        $publicacion->fecha = $request->fecha;
        $publicacion->hora = $request->hora;
        $publicacion->contenido = $request->contenido;
        $publicacion->idUsuario = session('id');
        $publicacion->idCategoria = $idCategoria;
        $publicacion->save();

        /*$publicacion = array(
            "fecha" => $request->fecha,
            "hora" => $request->hora,
            "contenido" => $request->contenido,
            "idUsuario" => session('id')
        );

        $idCategoria = DB::select("select `idCategoria` from `categoria` where `nombre` = `".$request->categoria."`");
        DB::insert("INSERT INTO publicacion (estado, fecha, hora, contenido, idUsuario, idCategoria) VALUES ('activa', '".$request->fecha."', '".$request->hora."', '".$request->contenido."', ".session('id').", ".$idCategoria.")");
        */
        return $publicacion;
    }

    public function cargar(Request $request){
        $publicaciones = DB::table('publicacion')
            ->where('estado', 'activa')
            ->orderBy('idPublicacion', 'desc')
            ->get();
        $datos = array(
            "mensajes" => $mensajes
        );
        return $datos;
    }
}
