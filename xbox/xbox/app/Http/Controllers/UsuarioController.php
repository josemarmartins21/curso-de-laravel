<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index() {
        $usuarios = Usuario::all();


        return view('usuarios', ['usuarios' => $usuarios]);

    }



    public function store(Request $request) {
        $user = new Usuario();

        $user->nome = $request->nome;
        $user->nacionalidade = $request->nacionalidade;
        $user->nasc = $request->nasc;
        $user->premios = $request->premios;

        $user->save();

        return redirect('/');
    }

    public function cadastrar() {

        return view('cadastrar');
    }
}
