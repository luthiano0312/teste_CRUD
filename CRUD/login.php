<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="authenticate.php" method="post">
        <label for="name">nome: </label>
        <input type="text" name="name" id="name">
        <br>
        <label for="cpf">cpf: </label>
        <input type="text" name="cpf" id="cpf">
        <br>
        <input type="submit">
        <?php
            session_start();
            if (!empty($_SESSION["error"])) {
                echo $_SESSION["error"];
            }
            session_destroy();
        ?>
    </form>
</body>
</html>