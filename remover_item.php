<?php
session_start();

// Verifica se o parâmetro item foi enviado
if (isset($_GET['item'])) {
    $item_para_remover = $_GET['item'];

    // Verifica se o item existe no carrinho
    if (isset($_SESSION['carrinho'][$item_para_remover])) {
        // Remove o item do carrinho
        unset($_SESSION['carrinho'][$item_para_remover]);

        // Redireciona de volta para a página do carrinho
        header("Location: carrinho.php");
        exit();
    }
}

// Se não houver parâmetro ou o item não existir, redirecione para o carrinho
header("Location: carrinho.php");
exit();
?>
