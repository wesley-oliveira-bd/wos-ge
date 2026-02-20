<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/wos-ge/config.php';
require_once BASE_PATH . '/config/conexao.php';

// valida se veio ID
$id = $_GET['id'] ?? null;

if (!$id) {
    die('ID inválido');
}

try {

    $stmt = $pdo->prepare("DELETE FROM clientes WHERE id = :id");
    $stmt->execute([':id' => $id]);

    header("Location: clientes.php?excluido=1");
    exit;

} catch (PDOException $e) {
    echo "Erro ao excluir: " . $e->getMessage();
}