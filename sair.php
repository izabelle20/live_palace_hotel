<?php
// Inicia a sessão
session_start();

// Destrói todas as variáveis de sessão
session_destroy();

// Redireciona o usuário de volta para a página de login
header('Location: login.php');
exit();
?>
