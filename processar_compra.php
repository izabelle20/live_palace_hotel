<?php
session_start();

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aqui você pode processar os dados do formulário, como enviar um e-mail de confirmação, salvar no banco de dados, etc.

    // Após o processamento, você pode limpar o carrinho
    unset($_SESSION['carrinho']);

    // Redirecionar para uma página de confirmação de compra
    header("Location: confirmacao_compra.php");
    exit();
} else {
    // Se alguém tentar acessar diretamente processar_compra.php sem enviar o formulário, redirecionar para o carrinho
    header("Location: carrinho.php");
    exit();
}
?>
