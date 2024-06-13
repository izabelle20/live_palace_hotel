<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Live Palace Hotel</title>
    <link rel="stylesheet" href="CSS/contato.css">
</head>
<body>

<div class="container">
    <header>
        <img src="IMG/logo.png" alt="Logo Live Palace Hotel">
        <div>
            <button onclick="window.location.href='index.php'">Home</button>
            <button onclick="window.location.href='carrinho.php'">Carrinho de compras</button>
            <button onclick="window.location.href='consumo.php'">Consumo</button>
            <button onclick="window.location.href='sair.php'">Sair</button>
        </div>
    </header>
</div>

<main>
    <div class="content">
        <div class="contact-column">
            <h1>Live Palace Hotel</h1>
            <p>Contato do Hotel: (61) 1234-5678</p> <!-- Número de contato adicionado -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61407.84151966828!2d-48.121177715391966!3d-15.857117913244982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3321354999e9%3A0x881fa531a22a3f88!2sCentro%20Universit%C3%A1rio%20Proje%C3%A7%C3%A3o%20-%20Taguatinga!5e0!3m2!1spt-BR!2sbr!4v1717871267189!5m2!1spt-BR!2sbr" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="form-column">
            <h1>Fale conosco</h1>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" required><br>

                <label for="email">E-mail:</label><br>
                <input type="email" id="email" name="email" required><br>

                <label for="mensagem">Mensagem:</label><br>
                <textarea id="mensagem" name="mensagem" rows="4" cols="50" required></textarea><br>

                <input type="submit" value="Enviar">
            </form>
            <?php
            $mensagem_enviada = false;

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Incluir arquivo de conexão
                require 'db_connect.php';

                // Verifica se os campos do formulário estão preenchidos
                if (!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["mensagem"])) {
                    // Preparar e vincular
                    $stmt = $conn->prepare("INSERT INTO contato (nome, email, mensagem, data_envio) VALUES (?, ?, ?, NOW())");
                    $stmt->bind_param("sss", $nome, $email, $mensagem);

                    // Definir parâmetros e executar
                    $nome = $_POST["nome"];
                    $email = $_POST["email"];
                    $mensagem = $_POST["mensagem"];
                    $stmt->execute();

                    // Verifica se a inserção foi bem-sucedida
                    if ($stmt->affected_rows > 0) {
                        $mensagem_enviada = true;
                    }

                    // Fechar a declaração
                    $stmt->close();
                }
                // Fechar a conexão
                $conn->close();
            }
            ?>
            <?php if ($mensagem_enviada): ?>
                <div class="mensagem-sucesso">
                    Sua mensagem foi enviada com sucesso!
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<footer>
    <div>
        <p class="copyright" id="direitos_reservados">&copy; <?php echo date("Y"); ?> Live Palace Hotel. Todos os direitos reservados a Larissa Tauanny.</p>
    </div>
</footer>

</body>
</html>
