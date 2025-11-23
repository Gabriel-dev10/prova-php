@extends('transacoes.layout')

@section('title', 'Editar Transação')

@section('content')
    <h2>Editar Transação</h2>
    <form action="{{ route('transacoes.update', $transacao) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" value="{{ $transacao->descricao }}" required>
        <br>
        <label for="valor">Valor:</label>
        <input type="number" name="valor" id="valor" value="{{ $transacao->valor }}" step="0.01" required>
        <br>
        <label for="data">Data:</label>
        <input type="date" name="data" id="data" value="{{ $transacao->data->format('Y-m-d') }}" required>
        <br>
        <label for="categoria_id">Categoria:</label>
        <select name="categoria_id" id="categoria_id">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ $categoria->id == $transacao->categoria_id ? 'selected' : '' }}>{{ $categoria->nome }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Atualizar</button>
    </form>
@endsection