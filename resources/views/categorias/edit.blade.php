<!DOCTYPE html>
<html>
<head>
    <title>Editar Categoria</title>
</head>
<body>
    <h1>Editar Categoria</h1>
    <form action="{{ route('categorias.update', $categoria) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $categoria->nome }}" required>
        <br>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao">{{ $categoria->descricao }}</textarea>
        <br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>