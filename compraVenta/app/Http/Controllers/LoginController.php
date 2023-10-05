<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller {

    public function goHome() {
        return redirect('/home');
    }

    // public function login(Request $request) {

    //     // Verificar si las credenciales son válidas
    //     if (Auth::attempt(['numero_documento' => $request->numero_documento, 'password' => $request->password])) {

    //         return redirect('/home');;
    //     }else {
    //         session()->flash('errorLogin', 'Credenciales incorrectas');
    //         session()->flash('errorLogin', "false");
    //         return redirect('/login');
    //     }
    // }

    public function login(Request $request) {

        $credenciales = [
            "numero_documento" => $request->numero_documento,
            "password" => $request->password,
        ];

        if(Auth::attempt($credenciales, false)) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }else {
            session()->flash('errorLogin', 'Credenciales incorrectas');

            return redirect('/login');
        }
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/quienes_somos');
    }
}
