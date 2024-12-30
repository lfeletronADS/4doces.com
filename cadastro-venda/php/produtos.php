<?php

$produtos = [
    ["imagem" => "img/doce_abobora.jpg", "nome" => "Doce de Abóbora", "descricao" => "Delicioso doce de abóbora caseiro."],
    ["imagem" => "img/doce_figo.jpg", "nome" => "Doce de Figo", "descricao" => "Doce de figo fresquinho e saboroso."],
    ["imagem" => "img/doce_ambrosia.jpg", "nome" => "Doce de ambrosia", "descricao" => "Delicioso doce de abóbora caseiro."],
    ["imagem" => "img/torta_bolacha.jpg", "nome" => "Torta de bolacha.jpg", "descricao" => "Doce de figo fresquinho e saboroso."],
    // ... outros produtos
    // ...Array de produtos
];

?>
<div class="container">
    <div class="row">
        <?php require 'php/produtos.php'; ?>
        <?php foreach ($produtos as $produto): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="imagens/<?php echo $produto['imagem']; ?>" class="card-img-top" alt="<?php echo $produto['nome']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $produto['nome']; ?></h5>
                        <p class="card-text">Preço: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                        <button class="btn btn-primary adicionar-carrinho" data-id="<?php echo $produto['id']; ?>" data-nome="<?php echo $produto['nome']; ?>" data-preco="<?php echo $produto['preco']; ?>">Adicionar ao Carrinho</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div id="carrinho" class="mt-3">
        <h3>Carrinho de Compras</h3>
        <ul id="lista-carrinho"></ul>
        <p>Total: R$ <span id="total-carrinho">0,00</span></p>
        <button id="finalizar-compra" class="btn btn-success" style="display: none;">Finalizar Compra</button>
    </div>
</div>

