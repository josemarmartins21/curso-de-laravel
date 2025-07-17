<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = 'Matheus';
        $idade = 29;
        $arr = [10,100,212,341,45,12];
        $nomes = ['Mateus', 'Maria', 'João', 'Salvio'];

        return view('welcome', 
        [
            'nome' => $nome, 
            'idade2' => $idade, 
            'profissao' => 'programador', 
            'arr' => $arr, 
            'nomes' => $nomes
        ]);
    }

    public function create()
    {
        return view('events.create');
    }
}
