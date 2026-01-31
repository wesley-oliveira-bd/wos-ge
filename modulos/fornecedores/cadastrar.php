<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedores</title>
    
</head>
<body>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/wos-ge/config.php';
        require_once BASE_PATH . '/includes/header.php';
    ?>

    <h2 class="mt-3 ms-3">Cadastro de Fornecedores</h2>
    <form class="row g-1 mt-3 ms-1">

        <div class="row">
            <div class="col-sm-1">
                <label for="tipo" class="col-sm-2 col-form-label col-form-label-sm">Tipo</label>
                <select name="tipo " id="tipo" class="form-select form-select-sm">
                    <option value="">Selecione</option>
                    <option value="1" selected>Fisico</option>
                    <option value="0">Juridico</option>
                </select>
            </div>
            <div class="col-sm-5">
                <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control form-control-sm">
            </div>
            <div class="col-sm-3">
                <label for="apelido" class="col-sm-2 col-form-label col-form-label-sm">Apelido</label>
                <input type="text" name="apelido" id="apelido" class="form-control form-control-sm">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3" id="grupoCpf">
                <label for="cpf" class="col-sm-2 col-form-label col-form-label-sm">CPF</label>
                <input type="number" name="cpf" id="cpf" class="form-control form-control-sm">
            </div>
            <div class="col-sm-3" id="grupoRg">
                <label for="rg" class="col-sm-2 col-form-label col-form-label-sm">RG</label>
                <input type="text" name="rg" id="rg" class="form-control form-control-sm">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3" id="grupoCnpj">
                <label for="cnpj" class="col-sm-2 col-form-label col-form-label-sm">CNPJ</label>
                <input type="number" name="cnpj" id="cnpj" class="form-control form-control-sm">
            </div>
            <div class="col-sm-3" id="grupoInsc">
                <label for="insc" class="col-sm-2 col-form-label col-form-label-sm">Insc.Est.</label>
                <input type="text" name="insc" id="insc" class="form-control form-control-sm">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <label for="endereco" class="col-sm-2 col-form-label col-form-label-sm">Endereço</label>
                <input type="text" name="texto" id="texto" class="form-control form-control-sm">
            </div>
            <div class="col-sm-1">
                <label for="numero" class="col-sm-2 col-form-label col-form-label-sm">Numero</label>
                <input type="text" name="numero" id="numero" class="form-control form-control-sm">
            </div>
            <div class="col-sm-1">
                <label for="complemento" class="col-sm-2 col-form-label col-form-label-sm">Complemento</label>
                <input type="text" name="complemento" id="complemento" class="form-control form-control-sm">
            </div>
            <div class="col-sm-2">
                <label for="bairo" class="col-sm-2 col-form-label col-form-label-sm">Bairro</label>
                <input type="text" name="bairro" id="bairro" class="form-control form-control-sm">
            </div>

            <div class="col-sm-3">
                <label for="cidade"  class="col-sm-2 col-form-label col-form-label-sm">Cidade</label>
                <input type="text" name="cidade" id="cidade" class="form-control form-control-sm">
            </div>

            <div class="col-sm-1">
                <label for="uf"  class="col-sm-2 col-form-label col-form-label-sm">UF</label>
                <input type="text" name="uf" id="uf" class="form-control form-control-sm">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-1">
                <label for="cep" class="col-sm-2 col-form-label col-form-label-sm">CEP</label>
                <input type="number" name="cep" id="cep" class="form-control form-control-sm">
            </div>
            <div class="col-sm-2">
                <label for="celular" class="col-sm-2 col-form-label col-form-label-sm">Celular</label>
                <input type="number" name="celular" id="celular" class="form-control form-control-sm">
            </div>
            <div class="col-sm-3">
                <label for="email" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                <input type="email" name="email" id="email" class="form-control form-control-sm">
            </div>
            <div class="col-sm-2">
                <label for="limite" class="col-sm-2 col-form-label col-form-label-sm">Limite</label>
                <input type="number" name="limite" id="limite" class="form-control form-control-sm">
            </div>
            <div class="col-sm-3">
                <label for="obs" class="col-sm-2 col-form-label col-form-label-sm">Obs.</label>
                <input type="text" name="obs" id="obs" class="form-control form-control-sm">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-1">
                <label for="ativo" class="col-sm-2 col-form-label col-form-label-sm">Ativo?</label>
                <select name="ativo" id="ativo" class="form-select form-select-sm">
                    <option value="">Selecione</option>
                    <option value="1" selected>Sim</option>
                    <option value="0">Não</option>
                </select>
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
                <a href="<?= BASE_URL ?>/modulos/fornecedores/editar.php"
                class="btn btn-success mt-2">
                    Editar
                </a>
            </div>

            <div class="col-auto">
                <a href="/wos-ge/index.php" class="btn btn-secondary mt-2">Cancelar</a>
            </div>

        </div>
    </form>


    <script>
        const tipo = document.getElementById('tipo');

        const grupoCpf = document.getElementById('grupoCpf');
        const grupoRg = document.getElementById('grupoRg');
        const grupoCnpj = document.getElementById('grupoCnpj');
        const grupoInsc = document.getElementById('grupoInsc');

        function atualizarCampos() {
            if (tipo.value == 1){
                //fisico
                grupoCpf.style.display = 'block';
                grupoRg.style.display = 'block';
                grupoCnpj.style.display = 'none';
                grupoInsc.style.display = 'none';
            } else if(tipo.value == 0) {
                grupoCpf.style.display = 'none';
                grupoRg.style.display = 'none';
                grupoCnpj.style.display = 'block';
                grupoInsc.style.display = 'block';
            }
        }
        tipo.addEventListener('change', atualizarCampos)
        // Executa ao carregar a página (por causa do selected)
        atualizarCampos();
    </script>
    
    <?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . '/wos-ge/config.php';
    require_once BASE_PATH . '/includes/footer.php'; 
    ?>?

</body>
</html>
