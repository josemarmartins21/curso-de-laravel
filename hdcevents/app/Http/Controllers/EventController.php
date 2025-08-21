<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EventController extends Controller
{
    public function index()
    {
        $serach = request('search');

        /**
         * verfica se o fomulário de pesquisa foi 
         * submetido e retorna os dados n view caso 
         * não retorna todo os dados
         * 
         */ 
        if ($serach) {
            
            $events = Event::where([
                ['title', 'like', '%' . $serach .'%']
            ])->get();

        } else {
            $events = Event::all();
        }

        // envia os dados para a view
        return view('welcome',  ['events' => $events, 'search' => $serach]);
    }

    public function store(Request $request) {
        $event = new Event();

        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        /* Image upload */
       if ($request->hasFile('image') && $request->file('image')->isValid()) {
            
            // atribui o valor da imagem do request a variavel requestImage
            $requestImage = $request->image;
            
            // pega extensão da imagem
            $extension = $requestImage->extension();

            // pega o nome do arquivo e atribui no final a data actual
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            // salvar a imagem no servidor
            $requestImage->move(public_path("image/events"), $imageName);

            // altera o nome da imagem a ser salvo no db
            $event->image = $imageName;

       }

       $user = Auth::user();
       $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso');
    }

    public function show($id) {
        
        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function dashboard()
    {
        $user = Auth::user();

        $events = $user->events;

        return view('events.dashboard', ['events' => $events]);
    }

    public function destroy($id)
    {
        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', "Evento excluido com sucesso!");
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('events.edit', ['event' => $event]);
    }

    public function update(Request $request, string $id)
    {
        $data = $request->all();

        /* Image upload */
       if ($request->hasFile('image') && $request->file('image')->isValid()) {
            
            // atribui o valor da imagem do request a variavel requestImage
            $requestImage = $request->image;
            
            // pega extensão da imagem
            $extension = $requestImage->extension();

            // pega o nome do arquivo e atribui no final a data actual
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            // salvar a imagem no servidor
            $requestImage->move(public_path("image/events"), $imageName);

            // altera o nome da imagem a ser salvo no db
            $data['image'] = $imageName;

       }

        Event::findOrFail(($request->id))->update($data);

        return redirect('/dashboard')->with('msg', 'Evento editado com sucesso');
    }

    public function joinEvent($id)
    {
        $user = Auth::user();

        $user->eventsAsParticipant()->attach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Sua presença está marcada para o evento: ' . $event->title);
    }
}
