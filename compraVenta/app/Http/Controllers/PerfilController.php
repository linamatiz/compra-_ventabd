<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class PerfilController extends Controller {

    public function update(Request $request) {
        // $cliente = User::find(auth()->user()->numero_documento); // Obtener el cliente autenticado

        $cliente = auth()->user();

        $cliente->numero_documento = $cliente->numero_documento;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->correo = $request->correo;

        // Verificar si se está actualizando la contraseña
        if ($request->filled('password')) {
            $cliente->password = Hash::make($request->password);
        }

        // $cliente->update([
        //     'numero_documento' => $cliente->numero_documento,
        //     'nombre' => $request->nombre,
        //     'apellido' => $request->apellido,
        //     'correo' => $request->correo,
        //     'password' => $request->password,
        // ]);
        $cliente->save();

        Auth::login($cliente);



        return redirect()->route('perfil')->with('actualizacionDatos', 'Perfil actualizado con éxito');
    }

}
