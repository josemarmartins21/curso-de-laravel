<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InforController extends Controller
{
    public function index()
    {
        $busca = request('search');
        return view('produtos.adicionar');
    }

    public function remover()
    {
        return view('produtos.remove');
    }
}
