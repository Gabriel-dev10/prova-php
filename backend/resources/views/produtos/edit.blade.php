@extends('layout')

@section('title', 'Editar Produto')

@section('content')
    <h2>Editar Produto</h2>
    <form action="{{ route('produtos.update', $produto) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $produto->nome }}" required>
        <br>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao">{{ $produto->descricao }}</textarea>
        <br>
        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" value="{{ $produto->preco }}" step="0.01" required>
        <br>
        <label for="categoria_id">Categoria:</label>
        <select name="categoria_id" id="categoria_id">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ $categoria->id == $produto->categoria_id ? 'selected' : '' }}>{{ $categoria->nome }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Atualizar</button>
    </form>
@endsection