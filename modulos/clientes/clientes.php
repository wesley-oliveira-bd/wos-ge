<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    
</head>
<body>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/wos-ge/config.php';
        require_once BASE_PATH . '/includes/header.php';
        require_once BASE_PATH . '/config/conexao.php';

        $stmt = "SELECT * FROM clientes ORDER BY nome ASC";
        $result = $pdo->query($stmt);
        $clientes = $result->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <h2 class="mt-3 ms-3">Cadastro de Clientes</h2>


    <form class="row g-1 mt-3 ms-1" action="#" method="POST">

        <div class="input-group">
            <input type="text" name="consultar" id="consultar" class="form-control form-control-sm">
            <button class="btn btn-primary sm-2" type="button" id="consultar" name="consultar">Consultar</button>
        </div>

    </form>

    <div class="table-responsive">
        <table class="table table-success table-striped table-bordered table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Apelido</th>
                    <th>CPF</th>
                    <th>CNPJ</th>
                    <th>Celular</th>
                    <th>Limite</th>
                    <th>Obs.</th>
                    <th>Ativo</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($clientes) > 0): ?>
                    <?php foreach ($clientes as $cliente): ?>
                        <tr>
                            <td><?= $cliente['id'] ?></td>
                            <td><?= strtoupper($cliente['nome']) ?></td>
                            <td><?= $cliente['apelido'] ?></td>
                            <td><?= $cliente['cpf'] ?></td>
                            <td><?= $cliente['cnpj'] ?></td>
                            <td><?= $cliente['celular'] ?></td>
                            <td><?= $cliente['limite'] ?></td>
                            <td><?= $cliente['obs'] ?></td>
                            <td><?= $cliente['ativo'] ?></td>
                            <td>editar</td>
                            <td>excluir</td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">Nenhum cliente encontrado</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    

    <?php 
        require_once $_SERVER['DOCUMENT_ROOT'] . '/wos-ge/config.php';
        require_once BASE_PATH . '/includes/footer.php'; 
    ?>
</body>
</html>
