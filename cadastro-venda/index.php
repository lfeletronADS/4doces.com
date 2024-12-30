<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</head>

<div class="container">
    <h1 class="text-center">Cadastro e Venda de Produtos</h1>
    <p>Data atual: <?php echo date('d/m/Y'); ?></p>

    <!-- Formulário de Cadastro do Cliente -->
    <form action="processar_pedido.php" method="post" id="dados-cliente">

        <h3>Dados do Cliente</h3>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" required>
        </div>

        <div class="mb-3">
            <label for="rua" class="form-label">Rua:</label>
            <input type="text" class="form-control" id="rua" name="rua" required>
        </div>

        <div class="mb-3">
            <label for="numero" class="form-label">Número:</label>
            <input type="text" class="form-control" id="numero" name="numero" required>
        </div>

        <div class="mb-3">
            <label for="complemento" class="form-label">Complemento:</label>
            <input type="text" class="form-control" id="complemento" name="complemento">
        </div>

        <div class="mb-3">
            <label for="cep" class="form-label">CEP:</label>
            <input type="text" class="form-control" id="cep" name="cep" required>
        </div>

        <div class="mb-3">
            <label for="bairro" class="form-label">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name="bairro" required>
        </div>

        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Finalizar Pedido</button>
    </form>
    </br>

    <!<div class="container">
        <div class="row">
            <?php require 'php/produtos.php'; ?> <!--chama o array imagens de produtos e o foreach distribui nos cards-->
        </div>
    </div>


</div>

<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tCnr36Nzmt082lJgY/5lcBPk936oT6ixb0X3n4q45j7c6c7b7d4d" crossorigin="anonymous"></script>

</body>

</html>