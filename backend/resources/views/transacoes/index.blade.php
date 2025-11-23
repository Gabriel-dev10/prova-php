@extends('transacoes.layout')

@section('title', 'Lista de Transações')

@section('content')
    <h2>Transações</h2>
    <a href="{{ route('transacoes.create') }}">Nova Transação</a>
    <ul>
        @foreach ($transacoes as $transacao)
            <li>
                {{ $transacao->descricao }} - R$ {{ $transacao->valor }} - {{ $transacao->data->format('d/m/Y') }}
                <a href="{{ route('transacoes.edit', $transacao) }}">Editar</a>
                <form action="{{ route('transacoes.destroy', $transacao) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
    <p>Total: R$ {{ $total }}</p>
@endsection