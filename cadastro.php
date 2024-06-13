<?php
// Verifica se o parâmetro de erro está presente na URL
if (isset($_GET['erro']) && $_GET['erro'] == 1) {
    $mensagem_erro = "Credenciais inválidas. Por favor, tente novamente.";
} else {
    $mensagem_erro = ""; // Se não houver erro, a mensagem fica vazia
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Live Palace Hotel</title>
    <link rel="stylesheet" href="CSS/cadastro.css">
</head>
<body>

<header>
    <img src="IMG/logo.png" alt="Logo Live Palace Hotel">
    <div>
        <button onclick="window.location.href='login.php'">Login</button>
    </div>
</header>

<div class="container">
    <h2>Cadastro - Live Palace Hotel</h2>
    <?php 
    // Exibe a mensagem de erro, se houver
    if (!empty($mensagem_erro)) {
        echo "<p class='error-message'>$mensagem_erro</p>";
    }
    ?>
    <form action="cadastro_process.php" method="post">
        <input type="text" name="nome" placeholder="Nome de Usuário" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Cadastrar</button>
    </form>
</div>

<footer>
    <div>
        <p class="copyright" id="direitos_reservados">&copy; <?php echo date("Y"); ?> Live Palace Hotel. Todos os direitos reservados a Larissa Tauanny.</p>
    </div>
</footer>

</body>
</html>
