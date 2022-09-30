@extends('layouts.main')

@section('title', 'Noticias')

@section('content')

    @foreach($news as $noticia)
        <div class="card mb-3" style="max-width: 80vw; margin:auto;">
            <div class="row g-0" id="main-card">
                <div class="col-md-4" id="show-img">
                    <img src="/img/news/{{ $noticia->imagem }}" id="card-img" class="img-fluid" alt="{{ $noticia->titulo }}">
                </div>
                <div class="col-md-8" id="texto-cartao">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: left; font-weight: bold">{{ $noticia->titulo }}</h5>
                        <p class="card-text" id="desc-card"style="text-align: justify">{{ $noticia->descricao }}</p>
                        <p class="card-text" style="text-align: right"><small class="text-muted">Autor: {{ $noticia->autor }}</small></p>
                        <a href="/news/{{ $noticia->id }}" class="btn btn btn-secondary">Leia agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection