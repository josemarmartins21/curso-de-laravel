<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
        $nomes = ['Bill Gates', 'Satya Anadela', 'Phill Spencer'];
        $busca = request('search');
        $ceo = 'Microsoft';

        return view('nomes', ['nomes' => $nomes, 'busca' => $busca, 'ceo' => $ceo]);
    }

    public function jogos()
    {
        $id = request('search');    

        return view('jogos', ['id' => $id]);
    }

    public function consoles($busca = '')
    {
        return view('consoles', ['busca' => $busca]);
    }

}
