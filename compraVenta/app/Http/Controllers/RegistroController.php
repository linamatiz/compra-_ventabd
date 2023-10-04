<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller {

    public function registrar(Request $request) {
        $nombre = $request->input('nombre');
        $correo = $request->input('correo');
        $numero_documento = $request->input('numero_documento');
        $apellido = $request->input('apellido');
        $contra = $request->input('contra');

        try {
            $sql = DB::insert("insert into cliente (numero_documento, nombre, apellido, correo, contra)values(?,?,?,?,?)", [
                $request -> $numero_documento,
                $request -> $nombre,
                $request -> $apellido,
                $request -> $correo,
                $request -> $contra,
            ]);
        }catch(\Throwable $th) {
            $sql = false;
        }

        if($sql) {
            return response()->json(['mensaje' => 'Registro exitoso'], 200);
        }else {
            return response()->json(['mensaje' => 'Registro no exitoso'], 201);
        }
    }
}
