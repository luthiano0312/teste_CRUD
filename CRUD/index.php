<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="connection.php" method="post">
        <label for="connection">Conexão: </label>
        <input type="submit" id="connection" value="testar">
    </form>

    <hr>

    <form action="create.php" method="post">
        <label for="name">nome: </label>
        <input type="text" name="name" id="name">
        <br>
        <label for="cpf">cpf: </label>
        <input type="number" name="cpf" id="cpf">
        <br>
        <input type="submit">
    </form>

    <hr>

    <form action="read.php" method="post">
        <label for="read">Dados: </label>
        <input type="submit" id="read" value="ver">
    </form>

    <hr>

    <form action="update.php" method="post">
        <p>dados a serem atualizados: </p>

        <label for="idCliente">ID: </label>
        <input type="number" name="idCliente" id="idCliente">
        <br>
        <label for="name">nome: </label>
        <input type="text" name="name" id="name">
        <br>
        <label for="cpf">cpf: </label>
        <input type="number" name="cpf" id="cpf">
        <br>
        <input type="submit" value="atualizar">
    </form>

    <hr>

    <form action="delete.php" method="post">
        <p>pessoa a ser deletada: </p>

        <label for="idCliente">ID: </label>
        <input type="number" name="idCliente" id="idCliente">
        <br>
        <input type="submit" value="excluir">
    </form>
</body>
</html>