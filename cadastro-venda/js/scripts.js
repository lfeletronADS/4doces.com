
$(document).ready(function() {
    $('#cep').mask('00000-000');
    $('#telefone').mask('(00) 00000-0000');
});

$(document).ready(function() {
    let carrinho = [];

    $('.adicionar-carrinho').click(function() {
        let produto = {
            id: $(this).data('id'),
            nome: $(this).data('nome'),
            preco: $(this).data('preco'),
            quantidade: 1
        };

        carrinho.push(produto);
        atualizarCarrinho();
    });

    function atualizarCarrinho() {
        $('#lista-carrinho').empty();
        let total = 0;

        carrinho.forEach(produto => {
            $('#lista-carrinho').append(`<li>${produto.nome} - R$ ${produto.preco.toFixed(2)} x ${produto.quantidade}</li>`);
            total += produto.preco * produto.quantidade;
        });

        $('#total-carrinho').text(total.toFixed(2).replace('.', ','));
        if (carrinho.length > 0) {
            $("#finalizar-compra").show();
        } else {
            $("#finalizar-compra").hide();
        }
    }

    $("#finalizar-compra").click(function(){
        // Enviar dados do carrinho para processamento do pedido
        localStorage.setItem('carrinho', JSON.stringify(carrinho));
        window.location.href = "index.php#dados-cliente"; // Redireciona para o formulário de cliente
        // aqui sera implementado o sistema de pagamento
    });
});