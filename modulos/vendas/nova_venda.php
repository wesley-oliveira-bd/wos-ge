<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova venda</title>
    
</head>
<body>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/wos-ge/config.php';
        require_once BASE_PATH . '/includes/header.php';
    ?>

    <h2 class="mt-3 ms-3">Nova venda</h2>

    <form action="" class="row g-3 mt-3 ms-1">

        <div class="col-md-2">
            <label class="form-label">Data de Emissão</label>
            <input type="date" name="emissao" id="emissao" class="form-control form-control-sm">
        </div>
        <div class="col-md-3">
            <label for="cliente" class="form-label form-label-sm">Cliente</label>
            <select class="form-select form-select-sm" name="cliente" id="cliente">
                <option selected>Escolha o cliente</option>
                <option value="1">WESLEY DE OLIVEIRA</option>
                <option value="2">DIELE FRANCIANE BOLINA</option>
                <option value="3">ALICE BOLINA DE OLIVEIRA</option>
            </select>
        </div>
        <div class="col-md-2">
            <label class="form-label">Vendedor</label>
            <input type="text" name="vendedor" id="vendedor" class="form-control form-control-sm">
        </div>
        
        <div class="col-md-7">
            <label for="incluir_itens" class="form-label">Incluir itens</label>
            <div class="input-group input-group-sm">
                <input type="text" name="incluir_itens" id="incluir_itens" class="form-control">
                <button class="btn btn-primary btn-sm" type="button" id="btn_incluir_itens" name="consultar">+</button>
            </div>
        </div>

         <div class="col-md-2">
            <label class="form-label">Total</label>
            <input type="number" name="total" id="total" class="form-control form-control-sm" readonly>
        </div>

        <div class="col-12 mt-3">
            <table class="table table-sm table-striped-columns align-middle" id="tabela_itens">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Descrição</th>
                        <th>Unid.</th>
                        <th>Qtd</th>
                        <th>Valor Unit.</th>
                        <th>Total</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- linhas entram aqui -->
                </tbody>
            </table>
        </div>

        <!-- FORMA DE PAGAMENTO-->
         <div class="row">
             <div class="col-sm-3" id="box_forma_pagamento">
                <label class="form-label">Forma de Pagamento</label>
                <select class="form-select form-select-sm" id="forma_pagamento" name="forma_pagamento">
                    <option value="" selected>Selecione</option>
                    <option value="1">Dinheiro</option>
                    <option value="2">Pix</option>
                    <option value="3">Prazo</option>
                    <option value="4">Cartão crédito</option>
                    <option value="5">Cartão débito</option>
                </select>
            </div>
            <!-- ESSE BOX DEVE FICAR OCULTO-->
            <div class="col-sm-1 d-none" id="box_quant_parcelas">
                <label class="form-label">Quant.</label>
                <input type="number" name="quant_parcelas" id="quant_parcelas" class="form-control form-control-sm">
            </div>
         </div>   

        <!-- parcelamento-->
         <div class="row">
             <div class="col-sm-3 d-none" id="parcelamento">
                <label class="form-label">Parcelas</label>
                <table class="table table-sm table-striped-columns align-middle" id="tabela_parcelamento">
                    <thead class="table-light">
                        <tr>
                            <th>N.parc.</th>
                            <th>Vencimento</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- linhas entram aqui -->
                    </tbody>
                </table>
            </div>
         </div>


    </form>

    <script src="<?= BASE_URL ?>/js/vendas.js"></script>

    <?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . '/wos-ge/config.php';
    require_once BASE_PATH . '/includes/footer.php'; 
    ?>

</body>
</html>