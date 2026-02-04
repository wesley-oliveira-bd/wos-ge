<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    
</head>
<body>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/wos-ge/config.php';
        require_once BASE_PATH . '/includes/header.php';
    ?>

    <h2 class="mt-3 ms-3">Cadastro de Produtos</h2>

   <form class="row g-3 mt-3 ms-1">

    <!-- COLUNA ESQUERDA (DADOS) -->
    <div class="col border-end">

        <div class="row g-2">
            <div class="col-md-2">
                <label for="codigo" class="form-label form-label-sm">Código</label>
                <input type="number" id="codigo" class="form-control form-control-sm">
            </div>

            <div class="col-md-3">
                <label for="referencia" class="form-label form-label-sm">Referência</label>
                <input type="text" id="referencia" class="form-control form-control-sm">
            </div>

            <div class="col-md-5">
                <label for="descricao" class="form-label form-label-sm">Descrição</label>
                <input type="text" id="descricao" class="form-control form-control-sm">
            </div>

            <div class="col-md-2">
                <label for="unid" class="form-label form-label-sm">Unid.</label>
                <input type="text" id="unid" class="form-control form-control-sm">
            </div>
        </div>

        <div class="row g-2 mt-2">
            <div class="col-md-10">
                <label for="aplicacao" class="form-label form-label-sm">Aplicação</label>
                <input type="text" id="aplicacao" class="form-control form-control-sm">
            
            </div>
            <div class="col-md-2">
                <label for="grupo" class="form-label form-label-sm">Grupo</label>
                <select class="form-select" name="grupo" id="grupo">
                    <option selected>Escolha o grupo</option>
                    <option value="1">cozinha</option>
                    <option value="2">cama,mesa e banho</option>
                    <option value="3">eletronicos</option>
                </select>
            </div>
        </div>

        <div class="row g-2 mt-2">
            <div class="col-md-4">
                <label for="custo" class="form-label form-label-sm">P. custo</label>
                <input type="number" id="custo" class="form-control form-control-sm">
            </div>

            <div class="col-md-4">
                <label for="venda" class="form-label form-label-sm">P. venda</label>
                <input type="number" id="venda" class="form-control form-control-sm">
            </div>

            <div class="col-md-4">
                <label for="margem" class="form-label form-label-sm">Margem (%)</label>
                <input type="number" id="margem" class="form-control form-control-sm">
            </div>
        </div>

        <!-- centralização dos botoes-->
        <div class="row justify-content-center">
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mt-2">
                    Salvar
                </button>
            </div>

            <div class="col-auto">
                <a href="<?= BASE_URL ?>/modulos/produtos/editar.php"
                class="btn btn-success mt-2">
                    Editar
                </a>
            </div>

            <div class="col-auto">
                <a href="/wos-ge/index.php" class="btn btn-secondary mt-2">Cancelar</a>
            </div>

        </div>

    </div>
   
    <!-- COLUNA DIREITA (IMAGEM) -->
    <div class="col-md-5 pe-4">
        <label for="imagem" class="form-label form-label-sm">Imagem</label>
        <input type="file" id="imagem" class="form-control form-control-sm">

        <!-- opcional: preview -->
        <div class="mt-2 border rounded p-2 text-center text-muted">
            Preview da imagem
        </div>
    </div>
    
        

    </form>


    <script>
        const custo  = document.getElementById('custo');
        const margem = document.getElementById('margem');
        const venda  = document.getElementById('venda');

        // Quando custo ou margem mudar → calcula venda
        function calcularVenda() {
            const valorCusto  = parseFloat(custo.value);
            const valorMargem = parseFloat(margem.value);

            if (!isNaN(valorCusto) && !isNaN(valorMargem)) {
                venda.value = (valorCusto * (1 + valorMargem / 100)).toFixed(2);
            }
        }

        // Quando venda mudar → calcula margem
        function calcularMargem() {
            const valorCusto = parseFloat(custo.value);
            const valorVenda = parseFloat(venda.value);

            if (!isNaN(valorCusto) && !isNaN(valorVenda) && valorCusto > 0) {
                margem.value = (((valorVenda - valorCusto) / valorCusto) * 100).toFixed(2);
            }
        }

        custo.addEventListener('input', calcularVenda);
        margem.addEventListener('input', calcularVenda);
        venda.addEventListener('input', calcularMargem);

    </script>
    
    <?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . '/wos-ge/config.php';
    require_once BASE_PATH . '/includes/footer.php'; 
    ?>

</body>
</html>
