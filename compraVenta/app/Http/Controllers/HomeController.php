<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller {
    public function goPerfil() {
        $cliente = User::find(auth()->user()->numero_documento); // Obtener el cliente autenticado
        return view('perfil', compact('cliente'));
    }
    
}
