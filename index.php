<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Live Palace Hotel</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body>

<header>
    <img src="IMG/logo.png" alt="Logo Live Palace Hotel">
    <div>
        <button onclick="window.location.href='contato.php'">Contato</button>
        <button onclick="window.location.href='carrinho.php'">Carrinho de compras</button>
        <button onclick="window.location.href='consumo.php'">Consumo</button>
        <button onclick="window.location.href='galeria.php'">Galeria</button>
        <button onclick="window.location.href='sair.php'">Sair</button>
    </div>
</header>

<?php
session_start();

// Verifica se a sessão de login está ativa
if (!isset($_SESSION['email'])) {
    // Se não estiver, redireciona o usuário de volta para a página de login
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- Inclua seus arquivos de estilo CSS aqui -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Conteúdo da página Index aqui -->
    <header>
        <section>
            <h2>Seja bem-vindo, <?php echo $_SESSION['email']; ?>!</h2>
        </section>
    </header>

    <div class="banner">
        <div class="banner-content">
            <h1>Live Palace Hotel</h1>
            <h2>Faça sua reserva</h2>
        </div>
    </div>

    <section class="suite-section">
        <h2>Suítes</h2>
        <div class="suite-container">
            <div class="suite">
                <img src="IMG/suite1.jpg" alt="Suíte 1">
                <p>Quarto de Solteiro com cama king Size(medida padrão é de 2,03m de altura e 1,93m de largura), um sofá, mesa de estudo e uma vista linda. </p>
                <p>Preço: R$ 200,00</p>
                <a href="reserva.php" class="reserve-button">Reserve agora</a>
            </div>
            <div class="suite">
                <img src="IMG/suite2.jpg" alt="Suíte 2">
                <p>Quarto DUPLO SOLTEIRO para você e seu parceiro(amigos,primos,etc...) com duas camas box, banheiro, televisão, ar-condicionado, espelho, mesa de estudo e vista linda.</p>
                <p>Preço: R$ 250,00</p>
                <a href="reserva.php" class="reserve-button">Reserve agora</a>
            </div>
            <div class="suite">
                <img src="IMG/suitefamilia.jpg" alt="Suíte 3">
                <p>Suite para família com 3 camas uma de casal e 2 de solteiro e um banheiro</p>
                <p>Preço: R$ 350,00</p>
                <a href="reserva.php" class="reserve-button">Reserve agora</a>
            </div>
        </div>
        <br>
        <div class="suite-container">
            <div class="suite">
                <img src="IMG/suitepresidencial.jpg" alt="Suíte 4">
                <p>Suíte presidencial, com vista para o mar,com televisão, poltronas e banheiro</p>
                <p>Preço: R$ 500,00</p>
                <a href="reserva.php" class="reserve-button">Reserve agora</a>
            </div>
            <div class="suite">
                <img src="IMG/suite5.jpg" alt="Suíte 5">
                <p>Suíte de casal super aconchegante com ama cama king Size(medida padrão é de 2,03m de altura e 1,93m de largura), sofá e televisão</p>
                <p>Preço: R$ 250,00</p>
                <a href="reserva.php" class="reserve-button">Reserve agora</a>
            </div>
            <div class="suite">
                <img src="IMG/suite6.jpg" alt="Suíte 6">
                <p>Quarto de Solteiro com cama king Size(medida padrão é de 2,03m de altura e 1,93m de largura), televisão e banheiro super aconchegante</p>
                <p>Preço: R$ 350,00</p>
                <a href="reserva.php" class="reserve-button">Reserve agora</a>
            </div>
        </div>
    </section>

    <section class="extra-section">
        <h3 id="atracoes">Nossas Atrações</h3>
        <div class="extra-container">
            <div class="extra-item">
                <img src="IMG/suite1.jpg" alt="Quartos e suítes">
                <p>Quartos e suítes</p>
            </div>
            <div class="extra-item">
                <img src="IMG/comida1.jpg" alt="Restaurante">
                <p>Restaurante</p>
            </div>
            <div class="extra-item">
                <img src="IMG/Brinquedoteca.jpg" alt="Brinquedoteca infantil">
                <p>Brinquedoteca infantil</p>
            </div>
            <div class="extra-item">
                <img src="IMG/Lazer4.jpg" alt="Lazer">
                <p>Lazer</p>
            </div>
        </div>
    </section>
</body>
</html>

<footer>
    <div>
        <p class="copyright" id="direitos_reservados">&copy; <?php echo date("Y"); ?> Live Palace Hotel. Todos os direitos reservados a Larissa Tauanny.</p>
    </div>
</footer>

</body>
</html>
