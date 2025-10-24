<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Jogo;

class JogoController extends Controller
{
    public function index() {
        $jogos = Jogo::all();


        return view('jogos', ['jogos' => $jogos]);
    }

    public function store(Request $request) {
        $j = new Jogo();

        $j->nome = $request->nome;
        $j->genero = $request->genero;
        $j->ano_lancamento = $request->ano_lancamento;
        $j->ano = $request->ano;
        $j->descricao = $request->descricao;
        
        // preparar a imagem
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." .$extension;

            $requestImage->move(public_path('img/jogos'), $imageName);

            $j->image = $imageName;

        }

        $j->save();

        return redirect('/jogos')->with('msg', 'Jogo cadastrado com sucesso');


    }

    public function cadastrar() {

        return view('cadastro');
    }


    public function create() {

        return view('cadastrar');
    }
}
