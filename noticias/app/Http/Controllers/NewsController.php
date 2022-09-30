<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class NewsController extends Controller
{
    public function index()
    {
        
        $news = Event::all(); //seleciona dados banco

        return view('welcome', ['news' => $news]); // envia home noticias banco

    }

    public function create () 
    {
        return view('news.create');
    }

    public function store (Request $request)
    {
        $news = new Event;

        $news->titulo = $request->titulo;
        $news->descricao = $request->descricao;
        $news->imagem = $request->imagem;
        $news->autor = $request->autor;

        //Upload da imagem
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

            $requestImagem = $request->imagem;

            $extension = $requestImagem->extension();

            $nomeImagem = md5($requestImagem->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $requestImagem->move(public_path('img/news'), $nomeImagem);

            $news->imagem = $nomeImagem;

        }

        $news->save();

        return redirect('/news/create')->with('msg', 'Notícia cadastrada com sucesso');

    }

    public function show($id) {
        
        $news = Event::findOrFail($id);

        return view('news.show', ['news' => $news]);

    }

}


