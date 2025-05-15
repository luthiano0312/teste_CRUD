<?php
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
    // var_dump($user);
    // var_dump($_POST);
    if (password_verify($user["cpf"], $cpf)) {
        echo "sim";
    }else {
        echo "não";
    }
?>