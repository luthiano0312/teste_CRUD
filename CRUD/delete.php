<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "connection.php";

        $idCliente = $_POST["idCliente"];

        $stmt = $conn->prepare("DELETE FROM CLIENTES WHERE ID = :id");
        $stmt->bindValue(":id", $idCliente);

        if($stmt->execute()) {
            echo "excluido com sucesso";
        } else {
            echo "erro na excluição";
        }
    ?>

    <form action="index.php" method="post">
        <input type="submit" value="voltar">
    </form>
</body>
</html>