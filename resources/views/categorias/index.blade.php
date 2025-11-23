<!DOCTYPE html>
<html>
<head>
    <title>Categorias</title>
</head>
<body>
    <h1>Lista de Categorias</h1>
    <a href="{{ route('categorias.create') }}">Criar Nova Categoria</a>
    <ul>
        @foreach ($categorias as $categoria)
            <li>
                {{ $categoria->nome }} - {{ $categoria->descricao }}
                <a href="{{ route('categorias.edit', $categoria) }}">Editar</a>
                <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>