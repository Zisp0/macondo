<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$usuarios = Usuario::all();
        foreach ($usuarios as $usuario) {
            $usuario->contrasena = Crypt::decryptString($usuario->contrasena);
        }
        return $usuarios;*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre = $request->old('nombre');
        $apellido = $request->old('apellido');
        $seudonimo = $request->old('seudonimo');
        $correo = $request->old('correo');
        $contrasena = $request->old('contrasena');
        $confirmarContrasena = $request->old('confirmarContrasena');

        $request->validate([
            'nombre' => ['required', 'string'],
            'apellido' => ['required', 'string'],
            'seudonimo' => ['required', 'string', 'unique:usuarios'],
            'correo' => ['required', 'email:rfc,dns', 'unique:usuarios'],
            'contrasena' => ['required', 'string', 'same:confirmarContrasena'],
            'confirmarContrasena' => ['required', 'string'],
        ]);

        $usuario = new Usuario;
        $usuario->nombre = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->seudonimo = $request->input('seudonimo');
        $usuario->estado = 'activo';
        $usuario->rol = 'usuario';
        $usuario->foto = 'no hay';
        $usuario->token = null;
        $usuario->correo = $request->input('correo');
        $usuario->contrasena = Crypt::encryptString($request->input('contrasena'));
        $usuario->save();

        $datos = DB::table('usuarios')
            ->where('correo', $request->input('correo'))
            ->get();

        session([
            'id' => $datos[0]->idUsuario,
            'nombre' => $datos[0]->nombre,
            'apellido' => $datos[0]->apellido
        ]);

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
