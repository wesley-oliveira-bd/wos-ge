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
