@extends('layout')

@section('title', 'Lista de Produtos')

@section('content')
    <h2>Produtos</h2>
    <a href="{{ route('produtos.create') }}">Novo Produto</a>
    <ul>
        @foreach ($produtos as $produto)
            <li>
                {{ $produto->nome }} - R$ {{ $produto->preco }} - Categoria: {{ $produto->categoria->nome ?? 'Sem Categoria' }}
                <a href="{{ route('produtos.edit', $produto) }}">Editar</a>
                <form action="{{ route('produtos.destroy', $produto) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection