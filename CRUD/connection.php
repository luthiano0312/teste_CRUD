<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=bd_crud;charset=utf8mb4","root","3128"); 
    } catch (PDOException $e) {
        echo "erro: " . $e->getMessage();
    }
?>