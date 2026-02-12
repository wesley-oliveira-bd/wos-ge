<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/wos-ge/config.php';
require_once BASE_PATH . '/config/conexao.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Acesso inválido');
}

try {

    $limite = str_replace(',', '.', $_POST['limite'] ?? 0);

    $stmt = $pdo->prepare("
        INSERT INTO clientes
        (tipo, nome, apelido, cpf, rg, cnpj, insc, endereco, numero, complemento, bairro, cidade, uf, cep, celular, email, limite, obs, ativo)
        VALUES
        (:tipo, :nome, :apelido, :cpf, :rg, :cnpj, :insc, :endereco, :numero, :complemento, :bairro, :cidade, :uf, :cep, :celular, :email, :limite, :obs, :ativo)
    ");

    $stmt->execute([
        ':tipo' => $_POST['tipo'] ?? 1,
        ':nome' => $_POST['nome'] ?? '',
        ':apelido' => $_POST['apelido'] ?? null,
        ':cpf'  => !empty($_POST['cpf']) ? $_POST['cpf'] : null,
        ':rg' => $_POST['rg'] ?? null,
        ':cnpj' => !empty($_POST['cnpj']) ? $_POST['cnpj'] : null,
        ':insc' => $_POST['insc'] ?? null,
        ':endereco' => $_POST['endereco'] ?? null,
        ':numero' => $_POST['numero'] ?? null,
        ':complemento' => $_POST['complemento'] ?? null,
        ':bairro' => $_POST['bairro'] ?? null,
        ':cidade' => $_POST['cidade'] ?? null,
        ':uf' => $_POST['uf'] ?? null,
        ':cep' => $_POST['cep'] ?? null,
        ':celular' => $_POST['celular'] ?? null,
        ':email' => $_POST['email'] ?? null,
        ':limite' => $limite,
        ':obs' => $_POST['obs'] ?? null,
        ':ativo' => $_POST['ativo'] ?? 1
    ]);

    header("Location: cadastrar.php?sucesso=1");
    exit;

} catch (PDOException $e) {
    echo $e->getMessage();
}
