@extends('layouts.main')

@section('title', 'Cadastrar Notícia')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre uma notícia</h1>
    @if(session('msg'))
    <p class="alert alert-success"> {{ session('msg') }}</p>
    @endif
    <form action="/news" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- titulo -->
        <div class="form-group">
            <label for="titulo" >Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título da notícia" required>
        </div>
        <!-- descricao -->
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea type="text" class="form-control" id="descricao" name="descricao" placeholder="Texto da notícia" required></textarea>
        </div>
        <!-- imagem -->
        <div class="form-group">
            <label for="imagem" >Imagem</label>
            <div>
                <input type="file" class="form-control-file" id="imagem" name="imagem" placeholder="Imagem da notícia" required>
            </div>

        </div>
        <!-- autor -->
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor da notícia" required>
        </div>
        <input type="submit" class="btn btn-secondary" value="Cadastrar Notícia">
    </form>

</div>


@endsection