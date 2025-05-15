<?php
    session_start();
    
    if (empty($_SESSION['user_id'])) {
        header('Location: login.php');
        exit;
    }

    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>pagina protegida</h1>
</body>
</html>