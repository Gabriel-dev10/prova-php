@extends('layout')

@section('title', 'Novo Produto')

@section('content')
    <h2>Criar Novo Produto</h2>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao"></textarea>
        <br>
        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" step="0.01" required>
        <br>
        <label for="categoria_id">Categoria:</label>
        <select name="categoria_id" id="categoria_id">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Salvar</button>
    </form>
@endsection