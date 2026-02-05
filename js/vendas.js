//lógica de adicionar linhas
let contadorLinhas = 0;

document.getElementById('btn_incluir_itens').addEventListener('click', function () {
    contadorLinhas++;

    const tbody = document.querySelector('#tabela_itens tbody');

    const tr = document.createElement('tr');

    tr.innerHTML = `
        <td>
            <input type="text" name="itens[${contadorLinhas}][id]" class="form-control form-control-sm">
        </td>

        <td>
            <input type="text" name="itens[${contadorLinhas}][descricao]" class="form-control form-control-sm">
        </td>

        <td>
            <input type="text" name="itens[${contadorLinhas}][unidade]" class="form-control form-control-sm">
        </td>

        <td>
            <input type="number" name="itens[${contadorLinhas}][quantidade]" 
                   class="form-control form-control-sm quantidade" min="1" value="1">
        </td>

        <td>
            <input type="number" name="itens[${contadorLinhas}][valor_unitario]" 
                   class="form-control form-control-sm valor-unitario" step="0.01">
        </td>

        <td>
            <input type="text" class="form-control form-control-sm valor-total" readonly>
        </td>

        <td class="text-center">
            <button type="button" class="btn btn-danger btn-sm btn-remover">X</button>
        </td>
    `;

    tbody.appendChild(tr);
});


//Cálculo automático do total (quantidade × valor)
document.addEventListener('input', function (e) {
    if (e.target.classList.contains('quantidade') || e.target.classList.contains('valor-unitario')) {

        const linha = e.target.closest('tr');

        const quantidade = linha.querySelector('.quantidade').value || 0;
        const valorUnitario = linha.querySelector('.valor-unitario').value || 0;

        const total = quantidade * valorUnitario;

        linha.querySelector('.valor-total').value = total.toFixed(2);
        
        // atualiza o total geral da venda
        calcularTotalGeral();

    }
});

//Botão para excluir a linha
document.addEventListener('click', function (e) {
    if (e.target.classList.contains('btn-remover')) {
        e.target.closest('tr').remove();
        calcularTotalGeral();
    }
});

// soma todos os valores da coluna "total"
function calcularTotalGeral() {
    let totalGeral = 0;

    // pega todos os inputs com classe "valor-total"
    const totais = document.querySelectorAll('.valor-total');

    totais.forEach(function (campo) {
        const valor = parseFloat(campo.value.replace(',', '.')) || 0;
        totalGeral += valor;
    });

    // exibe no input total
    document.getElementById('total').value = totalGeral.toFixed(2);
}



//PARTE DO CODIGO PARA CONTROLAR PARCELAMENTO
// Espera o HTML carregar completamente
document.addEventListener('DOMContentLoaded', function () {

    // 1. Captura dos elementos da tela
    const formaPagamento = document.getElementById('forma_pagamento');
    const boxQuantParcelas = document.getElementById('box_quant_parcelas');
    const inputQuantParcelas = document.getElementById('quant_parcelas');
    const boxParcelamento = document.getElementById('parcelamento');
    const tabelaParcelas = document.querySelector('#tabela_parcelamento tbody');

    // 2. Evento: quando mudar a forma de pagamento
    formaPagamento.addEventListener('change', function () {
        tratarFormaPagamento();
    });

    // 3. Evento: quando mudar a quantidade de parcelas
    inputQuantParcelas.addEventListener('input', function () {
        gerarParcelas();
    });

    // Função principal
    function tratarFormaPagamento() {
        const forma = formaPagamento.value;

        // Limpa tudo antes
        esconderParcelamento();

        // Prazo (3) ou Cartão Crédito (4)
        if (forma === '3' || forma === '4') {
            boxQuantParcelas.classList.remove('d-none');
        }
    }

    function esconderParcelamento() {
        boxQuantParcelas.classList.add('d-none');
        boxParcelamento.classList.add('d-none');
        inputQuantParcelas.value = '';
        tabelaParcelas.innerHTML = '';
    }

    function gerarParcelas() {
        const qtd = parseInt(inputQuantParcelas.value);

        // Validação básica
        if (!qtd || qtd <= 0) {
            boxParcelamento.classList.add('d-none');
            tabelaParcelas.innerHTML = '';
            return;
        }

        // Exibe a tabela
        boxParcelamento.classList.remove('d-none');
        tabelaParcelas.innerHTML = '';

        // ⚠️ Valor total (por enquanto fixo)
        const valorTotalInput = document.getElementById('total');
        const valorTotal = parseFloat(valorTotalInput.value.replace(',', '.')) || 0;
        
        const valorParcela = valorTotal / qtd;

        for (let i = 1; i <= qtd; i++) {
            const dataVencimento = calcularVencimento(i);

            const linha = `
                <tr>
                    <td>${i}</td>
                    <td>${dataVencimento}</td>
                    <td>R$ ${valorParcela.toFixed(2)}</td>
                </tr>
            `;

            tabelaParcelas.innerHTML += linha;
        }
    }

    function calcularVencimento(numeroParcela) {
        const hoje = new Date();
        hoje.setMonth(hoje.getMonth() + numeroParcela);

        const dia = String(hoje.getDate()).padStart(2, '0');
        const mes = String(hoje.getMonth() + 1).padStart(2, '0');
        const ano = hoje.getFullYear();

        return `${dia}/${mes}/${ano}`;
    }

});
