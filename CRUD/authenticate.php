<?php
    session_start();
    require 'connection.php';

    $name = $_POST['name'] ?? '';
    $cpf = $_POST['cpf'] ?? '';

    if (!$name || !$cpf) {
        $_SESSION["error"] = "preencha os campos";
        header('Location: login.php');      
        exit;
    }

    $stmt = $conn->prepare("SELECT * FROM CLIENTES WHERE NAME = :name");

    $stmt->bindValue(":name", $name);
    $stmt->execute();
    $user = $stmt->fetch();
    
    
    if ($user && password_verify($cpf, $user["cpf"])) {
        $_SESSION['user_id'] = $user["id"];
        header('Location: protect.php');
        exit;
    } else {
        echo "senha errada";
    }
?>