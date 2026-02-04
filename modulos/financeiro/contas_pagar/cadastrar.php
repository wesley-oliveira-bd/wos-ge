<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas a pagar</title>
    
</head>
<body>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/wos-ge/config.php';
        require_once BASE_PATH . '/includes/header.php';
    ?>

    <h2 class="mt-3 ms-3">Contas a pagar</h2>

   <form class="container-fluid px-4 mt-3">

        <!-- DADOS PRINCIPAIS -->
        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label">Fornecedor</label>
                <select class="form-select form-select-sm">
                    <option>Selecione</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Categoria</label>
                <select class="form-select form-select-sm">
                    <option>Selecione</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Descrição</label>
                <input type="text" class="form-control form-control-sm">
            </div>
        </div>

        <!-- VALORES -->
        <div class="row g-3 mt-2">
            <div class="col-md-3">
                <label class="form-label">Valor Original</label>
                <input type="number" class="form-control form-control-sm">
            </div>

            <div class="col-md-3">
                <label class="form-label">Desconto</label>
                <input type="number" class="form-control form-control-sm">
            </div>

            <div class="col-md-3">
                <label class="form-label">Juros</label>
                <input type="number" class="form-control form-control-sm">
            </div>

            <div class="col-md-3">
                <label class="form-label">Multa</label>
                <input type="number" class="form-control form-control-sm">
            </div>
        </div>

        <div class="row g-3 mt-1">
            <div class="col-md-3">
                <label class="form-label">Valor Final</label>
                <input type="number" class="form-control form-control-sm bg-light" readonly>
            </div>
        </div>

        <!-- DATAS -->
        <div class="row g-3 mt-2">
            <div class="col-md-3">
                <label class="form-label">Data de Lançamento</label>
                <input type="date" class="form-control form-control-sm">
            </div>

            <div class="col-md-3">
                <label class="form-label">Data de Vencimento</label>
                <input type="date" class="form-control form-control-sm">
            </div>

            <div class="col-md-3">
                <label class="form-label">Data de Pagamento</label>
                <input type="date" class="form-control form-control-sm">
            </div>

            <div class="col-md-3">
                <label class="form-label">Competência</label>
                <input type="month" class="form-control form-control-sm">
            </div>
        </div>

        <!-- FINANCEIRO -->
        <div class="row g-3 mt-2">
            <div class="col-md-3">
                <label class="form-label">Forma de Pagamento</label>
                <select class="form-select form-select-sm">
                    <option>Selecione</option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label">Conta Bancária</label>
                <select class="form-select form-select-sm">
                    <option>Selecione</option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label">Status</label>
                <select class="form-select form-select-sm">
                    <option>Aberto</option>
                    <option>Pago</option>
                    <option>Atrasado</option>
                    <option>Cancelado</option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label">Nº Documento</label>
                <input type="text" class="form-control form-control-sm">
            </div>
        </div>

        <!-- PARCELAMENTO -->
        <div class="row g-3 mt-2">
            <div class="col-md-2">
                <label class="form-label">Parcelas</label>
                <input type="number" class="form-control form-control-sm">
            </div>

            <div class="col-md-2">
                <label class="form-label">Parcela Atual</label>
                <input type="number" class="form-control form-control-sm">
            </div>
        </div>

        <!-- OBSERVAÇÃO -->
        <div class="row g-3 mt-2">
            <div class="col-md-12">
                <label class="form-label">Observações</label>
                <textarea class="form-control form-control-sm" rows="2"></textarea>
            </div>
        </div>

        <!-- AÇÕES -->
        <div class="row mt-3">
            <div class="col d-flex justify-content-center gap-2">
                <button type="submit" class="btn btn-primary btn-sm">
                    Salvar
                </button>

                <a href="/wos-ge/index.php" class="btn btn-secondary btn-sm">
                    Cancelar
                </a>
                <a href="/wos-ge/modulos/financeiro/contas_pagar/editar.php" class="btn btn-success btn-sm">Editar</a>
            </div>
        </div>

    </form>
    
    <?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . '/wos-ge/config.php';
    require_once BASE_PATH . '/includes/footer.php'; 
    ?>

</body>
</html>
