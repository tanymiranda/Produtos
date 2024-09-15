<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUTOS</title>
</head>
<body>
    <h1>Página Inicial</h1>
    <nav>
        <a href="/produtos/novo">Cadastrar Novos Produtos</a><br>
        @csrf
        <a href="/produtos/edita">Editar Produtos</a><br>
        @csrf
        <a href="/produtos">Listagem de Produtos</a>
        @csrf
    </nav>
</body>
</html>