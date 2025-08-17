<?php

namespace App\Http\Controllers;
use App\Models\Jogo;

use Illuminate\Http\Request;

class JogoController extends Controller
{
   public function index()
   {
      $jogos = Jogo::all();

      return view('jogos.index', ['jogos' => $jogos]);
   }

   public function create()
   {
      return view('jogos.create');
   }

   public function store(Request $request)
   {
      $jogo = new Jogo();

      $jogo->nome = $request->nome;
      $jogo->genero = $request->genero;
      $jogo->date = $request->date;
      $jogo->sobre = $request->sobre;
      $jogo->items = $request->items;

      // carregar a imagem
      if ($request->hasFile('image') && $request->file('image')->isValid()) {
         $requestImage = $request->image;

         $extension = $requestImage->extension();

         // criar nome único para imagem
         $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

         $requestImage->move(public_path('/img/jogos/'), $imageName);

         $jogo->image = $imageName;
      }

      $jogo->save();

      return redirect('/jogos')->with('msg', 'Jogo registrado com sucesso');
   }

   public function show($id)
   {
      $jogo = Jogo::findOrFail($id);

      return view('jogos.show', ['jogo' => $jogo]);
   }

   public function servicos()
   {
      return view('jogos.servicos');
   }
}
