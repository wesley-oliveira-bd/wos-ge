<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Grupos</title>
    
</head>
<body>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/wos-ge/config.php';
        require_once BASE_PATH . '/includes/header.php';
    ?>

    <h2 class="mt-3 ms-3">Cadastro de Grupos</h2>

   <form class="row g-3 mt-3 ps-3">
        <div class="row">
            <div class="col-md-2">
                <label for="grupo" class="form-label form-label-sm">Grupo</label>
                <input type="text" id="grupo" class="form-control form-control-sm">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary mt-2">Salvar</button>
            </div>
        </div>
   </form>
    <?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . '/wos-ge/config.php';
    require_once BASE_PATH . '/includes/footer.php'; 
    ?>

</body>
</html>
