@extends('layouts.app')

@section('conteudo')
<div class="container">
    <h1>Categorias</h1>
    <div class="grid">
        @foreach($categorias as $categoria)
            <a href="{{ url('/categorias/' . $categoria->id) }}" class="card">
                <div class="nome">{{ $categoria->nome }}</div>
                <div class="desc">{{ $categoria->descricao }}</div>
            </a>
        @endforeach
    </div>
</div>
@endsection