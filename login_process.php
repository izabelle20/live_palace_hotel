<?php
include_once('db_connect.php');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Query SQL para buscar usuário
    $sql = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuário autenticado, redireciona para página principal
        header("Location: index.php");
        exit();
    } else {
        // Usuário não encontrado, redireciona para página de login com mensagem de erro
        header("Location: login.php?erro=1");
        exit();
    }
}
?>
