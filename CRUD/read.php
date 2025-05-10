<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    

    <table border="1">
        <thead>
            <th>id</th>
            <th>nome</th>
            <th>cpf</th>
        </thead>

        <tbody>
            <?php

            require_once "connection.php";

            $stmt = $conn->prepare("SELECT * FROM CLIENTES;");
            $stmt->execute();

            while ($rows = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
                <tr>
                    <td><?php echo $rows->ID; ?></td>
                    <td><?php echo $rows->name; ?></td>
                    <td><?php echo $rows->cpf; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <form action="index.php" method="post">
        <input type="submit" value="voltar">
    </form>
   
</body>
</html>