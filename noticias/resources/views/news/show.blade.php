@extends('layouts.main')

@section('title', $news->titulo)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row" id="show-content-div">
        <div id="info-container" class="col-md-6">
            <h1>{{$news->titulo}}</h1>
        </div>
        <div id="info-container" class="col-md-6">
            <h6>Autor: {{$news->autor}}</h6>
        </div>
        <div id="image-container" class="col-md6">
            <img id="show-img" src="/img/news/{{$news->imagem}}" class="img-fluid" alt="{{$news->titulo}}">
        </div>
        <div id="info-container-text" class="col-md-6">
            <p>{{$news->descricao}}</p>
        </div>
    </div>
</div>

@endsection