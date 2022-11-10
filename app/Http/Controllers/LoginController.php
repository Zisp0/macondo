<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function show(){
        if(session('id')){
            return redirect('/home');
        }
        $correo = NULL;
        $msjCorreo = NULL;
        $msjContra = NULL;
        return view('login', compact('correo', 'msjCorreo', 'msjContra'));
    }

    public function login(Request $request){
        $correo = $request->old('correo');

        $request->validate([
            'correo' => ['required', 'email:rfc,dns'],
            'contrasena' => ['required', 'string'],
        ]);
        
        $datos = DB::table('usuarios')
            ->where('correo', $request->input('correo'))
            ->get();

        /*$usuario = new Usuario;
        $usuario->nombre = $datos->nombre;
        $usuario->apellido = $datos->apellido;
        $usuario->seudonimo = $datos->seudonimo;
        $usuario->estado = $datos->estado;
        $usuario->rol = $datos->rol;
        $usuario->foto = $datos->foto;
        $usuario->token = $datos->token;
        $usuario->correo = $datos->correo;
        $usuario->contrasena = Crypt::decryptString($datos->contrasena);
        
        return("si hay");*/
        $msjCorreo = NULL;
        $msjContra = NULL;
        if(count($datos) > 0){
            if($request->input('contrasena') == Crypt::decryptString($datos[0]->contrasena)){
                session([
                    'id' => $datos[0]->idUsuario,
                    'nombre' => $datos[0]->nombre,
                    'apellido' => $datos[0]->apellido
                ]);
                return redirect('/home');
            }else{
                $msjContra = "La contraseña es incorrecta.";
            }
        }else{
            $msjCorreo = "El correo no se encuentra registrado.";
        }

        $correo = $request->input('correo');
        return view('login', compact('correo', 'msjCorreo', 'msjContra'));
    }
}
