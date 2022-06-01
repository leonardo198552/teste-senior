<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <form action="/cadastrar-produto" method="POST">
        @csrf
        {{-- Nome --}}
        <label>Nome do produto:</label>
        <input type="text" name="nome">
        <br><br>
        {{-- Valor do produto --}}
        <label>Valor do produto</label>
        <input type="text" name="valor">
        <br><br>
        {{-- Estoque --}}
        <label>Quantidade em estoque</label>
        <input type="text" name="estoque">
        <br><br>
        <button>Salvar produto</button>



    </form>
</body>
</html>