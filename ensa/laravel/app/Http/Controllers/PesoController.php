<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peso;

class PesoController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request) {

        $imc = $this->calcularImc((int) $request->altura, (int)$request->peso);
        Peso::create([
            'alutra' => $request->altura,
            'peso' => $request->peso,
            'imc' => $imc
    
        ]);

        return redirect('/')->with('msg', 'Seu imc é de ' . $imc);
    }

    public function calcularImc(int $altura, int $peso) {
       return number_format((int) $peso / ($altura * $altura), 2, ',', '.');
       
    }
}
