@extends('transacoes.layout')

@section('title', 'Nova Transação')

@section('content')
    <h2>Criar Nova Transação</h2>
    <form action="{{ route('transacoes.store') }}" method="POST">
        @csrf
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" required>
        <br>
        <label for="valor">Valor:</label>
        <input type="number" name="valor" id="valor" step="0.01" required>
        <br>
        <label for="data">Data:</label>
        <input type="date" name="data" id="data" required>
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