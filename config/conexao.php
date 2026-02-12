<?php
    //configuração do banco de dados
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "wos-ge";

    //criar conexão (poo)
    try{
        $pdo = new PDO("mysql:host=$host; dbname=$banco; charset=utf8", $usuario, $senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("Erro na conexão: " . $e->getMessage());
    }
    
?>