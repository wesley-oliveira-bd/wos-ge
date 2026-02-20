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

        $clientes = [];

        if (isset($_POST['btnConsultar']) && !empty($_POST['consultar'])) {

            $busca = "%" . $_POST['consultar'] . "%";

            $stmt = $pdo->prepare("
                SELECT * FROM clientes
                WHERE nome LIKE :busca
                OR cpf LIKE :busca
                OR cnpj LIKE :busca
                ORDER BY nome ASC
            ");

            $stmt->bindParam(':busca', $busca);
            $stmt->execute();

            $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

            } else {

                // 🔹 se não buscou, mostra todos
                $stmt = $pdo->query("SELECT * FROM clientes ORDER BY nome ASC");
                $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
    ?>

    <h2 class="mt-3 ms-3">Cadastro de Clientes</h2>

    <div class="row justify-content-center">
        <div class="col-auto">
            <a href="<?= BASE_URL ?>/modulos/clientes/cadastrar.php" class="btn btn-primary mt-2">
                Novo Cliente
            </a>
        </div>
    </div>


    <form class="row g-1 mt-3 me-3 ms-3" method="POST">

        <div class="input-group">
            <input type="text" name="consultar" id="consultar" class="form-control form-control-sm">
            <button class="btn btn-primary sm-2" type="submit" id="btnConsultar" name="btnConsultar">Consultar</button>
        </div>

    </form>

    <div class="table-responsive ms-3 me-3 mt-3">
        <table class="table table-success table-striped table-bordered table-sm" style="font-size: 0.75rem;">
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
                            <td><a href="" class="btn btn-sm btn-outline-success d-flex justify-content-center align-items-center" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><i class="bi bi-pencil-square"></i></a></td>
                            <td>
                                <a href="excluir.php?id=<?= $cliente['id'] ?>" class="btn btn-sm d-flex btn-outline-danger justify-content-center align-items-center" style="--bs-btn-padding-y:.25rem; --bs-btn-padding-x:.5rem; --bs-btn-font-size:.75rem;" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">
                                    <i class="bi bi-trash3"></i>
                                </a>
                            </td>
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
