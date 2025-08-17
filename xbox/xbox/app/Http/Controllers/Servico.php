<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Servico extends Controller
{
    public function index() {

        
        return view('servicos');
    }
}
