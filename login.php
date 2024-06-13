<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["senha"])) {

        $email = $_POST["email"];
        $senha = $_POST["senha"];

    
        $_SESSION['email'] = $email;

    
        header('Location: index.php');
        exit();
    } else {
    
        $error_message = "Por favor, insira seu e-mail e senha.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
    <header>
        <img src="IMG/logo.png" alt="Logo Live Palace Hotel">
    </header>
    <br><br><br>
    <h2>Login</h2>
<br><br><br><br><br>
    <div class="login">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="login-form">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br>
            <input type="submit" value="Login">
    </div>
   
</form>
    <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>

    <?php if (isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>

    <footer>
    <div>
        <p class="copyright" id="direitos_reservados">&copy; <?php echo date("Y"); ?> Live Palace Hotel. Todos os direitos reservados a Larissa Tauanny.</p>
    </div>
</footer>
</body>
</html>