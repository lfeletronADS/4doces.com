<?php

$host = 'localhost'; // Seu host 127.0.0.1
$dbname = 'loja'; // Nome do banco de dados
$user = 'root'; // Seu usuário do banco / local é root
$pass = ''; // Sua senha do banco xampp loca sem senha 



try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão estabelecida com sucesso!"; // Remova em produção
} catch (PDOException $e) {
    error_log($e->getMessage()); // Registra o erro em um log
    echo "Ocorreu um erro ao conectar ao banco de dados. Por favor, tente novamente mais tarde."; // Mensagem genérica para o usuário
    // Ou redirecione para uma página de erro:
    // header("Location: erro.php");
    exit;
}

?>