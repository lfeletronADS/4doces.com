<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'conexao.php'; // Caminho correto para conexao.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Sanitização e filtros (MUITO IMPORTANTE!)
        $nome = htmlspecialchars($_POST['nome'], ENT_QUOTES, 'UTF-8');
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $telefone = preg_replace("/[^0-9]/", "", $_POST['telefone']); // Remove caracteres não numéricos
        $rua = htmlspecialchars($_POST['rua'], ENT_QUOTES, 'UTF-8');
        $numero = htmlspecialchars($_POST['numero'], ENT_QUOTES, 'UTF-8');
        $complemento = htmlspecialchars($_POST['complemento'], ENT_QUOTES, 'UTF-8');
        $cep = preg_replace("/[^0-9]/", "", $_POST['cep']); // Remove caracteres não numéricos
        $bairro = htmlspecialchars($_POST['bairro'], ENT_QUOTES, 'UTF-8');
        $cidade = htmlspecialchars($_POST['cidade'], ENT_QUOTES, 'UTF-8');

        // Validação adicional (opcional, mas recomendada)
        if (empty($nome)) {
            throw new Exception("O nome é obrigatório.");
        }
        if ($email === false) { // Verifica se o email é válido
            throw new Exception("Email inválido.");
        }

        // Prepared statement com PDO
        $stmt = $pdo->prepare("INSERT INTO cliente (nome, email, telefone, data_cadastro, rua, numero, complemento, cep, bairro, cidade) VALUES (:nome, :email, :telefone, CURDATE(), :rua, :numero, :complemento, :cep, :bairro, :cidade)");

        // Bind dos valores (evita SQL Injection)
        $stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':telefone', $telefone, PDO::PARAM_STR);
        $stmt->bindValue(':rua', $rua, PDO::PARAM_STR);
        $stmt->bindValue(':numero', $numero, PDO::PARAM_STR);
        $stmt->bindValue(':complemento', $complemento, PDO::PARAM_STR);
        $stmt->bindValue(':cep', $cep, PDO::PARAM_STR);
        $stmt->bindValue(':bairro', $bairro, PDO::PARAM_STR);
        $stmt->bindValue(':cidade', $cidade, PDO::PARAM_STR);

        $stmt->execute();

        // Mensagem de sucesso com redirecionamento (melhor UX)
        echo "<div class='alert alert-success mt-3 container' role='alert'>Cliente cadastrado com sucesso!</div>";
        echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 2000);</script>"; // Redireciona após 2 segundos
        exit; // Importante para evitar que o restante do código seja executado após o redirecionamento

    } catch (PDOException $e) {
        echo "<div class='alert alert-danger mt-3 container' role='alert'>Erro no banco de dados: " . $e->getMessage() . "</div>";
        echo "<div class='mt-3 container'><a href='../index.php' class='btn btn-primary'>Voltar</a></div>";
    } catch (Exception $e) {
        echo "<div class='alert alert-danger mt-3 container' role='alert'>Erro na aplicação: " . $e->getMessage() . "</div>";
        echo "<div class='mt-3 container'><a href='../index.php' class='btn btn-primary'>Voltar</a></div>";
    }
}

if(isset($_POST['finalizar_pagamento'])){
    // Receber dados do carrinho e do cliente
    // Gerar um código de pedido único
    // Configurar as informações de pagamento para o PagSeguro
    // Redirecionar o usuário para a página de pagamento do PagSeguro
}

// ... (resto do código)
?>

