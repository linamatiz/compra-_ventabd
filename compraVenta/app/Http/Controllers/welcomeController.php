<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;

class welcomeController extends Controller {

    private $mensaje;

    public function goRegistro() {
        return view('registro');
    }
    public function goLogin() {
        return view('login');
    }

    public function goQueSomos() {
        return view('que_somos');
    }

    public function index() {
        $datos = DB::select("select * from cliente");
        return response()->json($datos);
    }

}
