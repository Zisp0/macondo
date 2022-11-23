<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use Illuminate\Support\Facades\DB;

class PublicacionController extends Controller
{
    //
    public function postear(Request $request){
        $publicacion = new Publicacion;
        $publicacion->estado = "activa";
        $publicacion->fecha = $request->fecha;
        $publicacion->hora = $request->hora;
        $publicacion->titulo = $request->titulo;
        $publicacion->contenido = $request->contenido;
        $publicacion->idUsuario = session('id');
        $publicacion->idCategoria = $request->categoria;
        $publicacion->save();

        return $publicacion;
    }

    public function cargar(Request $request){
        $prov = array();
        $publicaciones = NULL;
        if($request->categoria == "Inicio"){
            $publicaciones = DB::table('publicacion')
            ->where('estado', 'activa')
            ->orderBy('idPublicacion', 'desc')
            ->get();
        }else{
            $idCategoria = DB::table('categoria')
                ->where('nombre', $request->categoria)
                ->get();
            $publicaciones = DB::table('publicacion')
            ->where('estado', 'activa')
            ->where('idCategoria', $idCategoria[0]->idCategoria)
            ->orderBy('idPublicacion', 'desc')
            ->get();
        }

        foreach ($publicaciones as $indice => $valor) {
            $usuario = DB::table('usuarios')
            ->where('idUsuario', $publicaciones[$indice]->idUsuario)
            ->get();
            array_push($prov, array($publicaciones[$indice], $usuario[0]));
        }

        $datos = array(
            "datos" => $prov
        );
        return $datos;
    }
}
