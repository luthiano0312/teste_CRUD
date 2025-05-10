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
        $name = $_POST["name"];
        $cpf = $_POST["cpf"];

        if ($name === '') {
            $stmt = $conn->prepare("UPDATE CLIENTES SET cpf = :cpf WHERE ID = :id");

            $stmt->bindValue(":cpf", $cpf);
            $stmt->bindValue(":id", $idCliente);

        } elseif ($cpf === '') {
            $stmt = $conn->prepare("UPDATE CLIENTES SET name = :name WHERE ID = :id");

            $stmt->bindValue(":name", $name);
            $stmt->bindValue(":id", $idCliente);
        }else {
            $stmt = $conn->prepare("UPDATE CLIENTES SET cpf = :cpf, name = :name WHERE ID = :id");

            $stmt->bindValue(":cpf", $cpf);
            $stmt->bindValue(":name", $name);
            $stmt->bindValue(":id", $idCliente);
        }

        if($stmt->execute()) {
            echo "dados atualizados";
        } else {
            echo "erro na atualização";
        }
    ?>

    <form action="index.php" method="post">
        <input type="submit" value="voltar">
    </form>
</body>
</html>