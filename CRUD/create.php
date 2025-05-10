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

        $name = $_POST["name"];
        $cpf = $_POST["cpf"];
        
        $stmt = $conn->prepare("INSERT INTO CLIENTES (name, cpf) VALUES (:name, :cpf)");

        $stmt->bindValue(":name", $name);
        $stmt->bindValue(":cpf", $cpf);

        if($stmt->execute()) {
            echo "dados cadastrados";
        } else {
            echo "erro no cadastro";
        }
    ?>

    <form action="index.php" method="post">
        <input type="submit" value="voltar">
    </form>
</body>
</html>
