<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css')}}">
</head>
<body>
    <h1 class="arquivo">Cadastro do Servidor</h1>
    <form method="POST" action="servidores">

        <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>
        <label for="email">Email:</label>
             <input type="email" id="email" name="email" required><br><br>
        <input id="botao" type="submit" value="Salvar">

    </form>
</body>
</html>