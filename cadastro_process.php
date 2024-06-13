<?php
include_once('db_connect.php');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Query SQL para inserir novo usuário
    $sql = "INSERT INTO login (nome, email, senha, data_cadastro) VALUES ('$nome', '$email', '$senha', NOW())";

    if ($conn->query($sql) === TRUE) {
        // Usuário cadastrado com sucesso, redireciona para página de login
        header("Location: login.php");
        exit();
    } else {
        // Erro ao cadastrar usuário, redireciona para página de cadastro com mensagem de erro
        header("Location: cadastro.php?erro=1");
        exit();
    }
}
?>
