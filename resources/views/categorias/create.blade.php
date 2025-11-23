<!DOCTYPE html>
<html>
<head>
    <title>Criar Categoria</title>
</head>
<body>
    <h1>Criar Nova Categoria</h1>
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao"></textarea>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>