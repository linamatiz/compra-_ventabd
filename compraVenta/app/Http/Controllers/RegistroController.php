<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegistroController extends Controller {

    public function registrar(Request $request) {
        $user = new User();

        $user->numero_documento = $request -> numerodoc;
        $user->nombre = $request -> nombre;
        $user->apellido = $request -> apellido;
        $user->correo = $request -> correo;
        $user->password = Hash::make($request -> contrasena);

        $user->save();

        session()->flash('registroValido', 'Registro exitoso. ¡Inicia sesión ahora!');

        return redirect('/login');
        // try {


        //     $sql = DB::insert("insert into users (numero_documento, nombre, apellido, correo, password)values(?,?,?,?,?)", [
        //         $request -> numerodoc,
        //         $request -> nombre,
        //         $request -> apellido,
        //         $request -> correo,
        //         $request -> contrasena,
        //     ]);
        // }catch(\Throwable $th) {
        //     $sql = 0;
        // }

        // if($sql == true) {
        //     session()->flash('registroValido', 'Registro exitoso. ¡Inicia sesión ahora!');

        //     return redirect('/login');
        // }else {
        //     session()->flash('registroNoValido', 'no se creo bien');

        //     return redirect('/login');
        // }
    }
}
