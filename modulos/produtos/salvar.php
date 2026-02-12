<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/wos-ge/config.php';
require_once BASE_PATH . '/config/conexao.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Acesso inválido');
}

