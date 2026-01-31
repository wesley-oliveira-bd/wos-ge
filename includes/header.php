<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/styles.css">
</head>

<body>

    <header>
        <div class="container-fluid">
            <a href="/wos-ge/index.php"><img src="<?= BASE_URL ?>/imagens/logo01.png" alt="logo principal do site" class="img-logo"></a>
        </div>
        <nav class="nav justify-content-center border-bottom pb-2">
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" ria-expanded="false">Cadastros</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= BASE_URL ?>/modulos/clientes/cadastrar.php">Clientes</a></li>
                    <li><a class="dropdown-item" href="<?= BASE_URL ?>/modulos/fornecedores/cadastrar.php">Fornecedores</a></li>
                    <li><a class="dropdown-item" href="<?= BASE_URL ?>/modulos/produtos/cadastrar.php">Produtos</a></li>
                    <li><a class="dropdown-item" href="<?= BASE_URL ?>/modulos/produtos/grupos.php">Grupos</a></li>
                </ul>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" ria-expanded="false">Compras</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Nova</a></li>
                    <li><a class="dropdown-item" href="#">Consultar</a></li>
                    <li><a class="dropdown-item" href="#">Editar</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" ria-expanded="false">Vendas</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Nova</a></li>
                    <li><a class="dropdown-item" href="#">Consultar</a></li>
                    <li><a class="dropdown-item" href="#">Editar</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" ria-expanded="false">Financeiro</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= BASE_URL ?>/modulos/financeiro/contas_pagar/cadastrar.php">Contas a pagar</a></li>
                    <li><a class="dropdown-item" href="#">Contas a receber</a></li>
                </ul>
            </li>
        </nav>
    </header>



</body>
</html>