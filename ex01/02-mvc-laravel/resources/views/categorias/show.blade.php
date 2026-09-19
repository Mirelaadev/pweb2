@extends('layouts.app')

@section('conteudo')
    <a href="{{ url('/categorias') }}" class="voltar">← Voltar para Categorias</a>

    <div class="detalhe" style="margin-bottom: 32px;">
        <div class="emoji">📁</div>
        <div class="info">
            <h1>{{ $categoria->nome }}</h1>
            <p class="desc">{{ $categoria->descricao }}</p>
        </div>
    </div>

    <h2>Produtos nesta categoria</h2>
    
    <div class="grid">
        @forelse($produtos as $produto)
            <a href="{{ url('/produtos/' . $produto->id) }}" class="card">
                <div class="emoji">📦</div>
                <div class="nome">{{ $produto->nome }}</div>
                <p class="preco">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
            </a>
        @empty
            <p class="sub">Nenhum produto cadastrado nesta categoria.</p>
        @endforelse
    </div>
@endsection