<?php
session_start();
include_once('db_connect.php'); // Certifique-se de que db_connect.php contém a conexão com o banco de dados

// Processar o formulário de reserva
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $v_entrada = $_POST['v_entrada'];
    $v_saida = $_POST['v_saida'];
    $quartos = $_POST['quartos'];
    $pessoas = $_POST['pessoas'];

    // Definir o preço da diária (exemplo fixo, ajuste conforme necessário)
    $preco_diaria = 100;

    // Calcular o preço total da reserva
    $preco_total = $preco_diaria * $quartos;

    // Armazenar os detalhes da reserva na sessão para passar para a página do carrinho
    $_SESSION['carrinho'][] = array(
        'v_entrada' => $v_entrada,
        'v_saida' => $v_saida,
        'quartos' => $quartos,
        'pessoas' => $pessoas,
        'preco' => $preco_total, // Adicionar o preço total da reserva
    );

    // Redirecionar para a página do carrinho
    header("Location: carrinho.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar - Live Palace Hotel</title>
    <link rel="stylesheet" href="CSS/reserva.css">
</head>
<body>
<header>
    <img src="IMG/logo.png" alt="Logo Live Palace Hotel">
    <div>
        <button onclick="window.location.href='index.php'">Home</button>
        <button onclick="window.location.href='sair.php'">Sair</button>
    </div>
</header>

<h2>Fazer Reserva</h2>
<div class="container">
    <?php
    if (!empty($error_message)) {
        echo "<p class='error-message'>$error_message</p>";
    }
    ?>
    <form id="reservaForm" action="reserva.php" method="post">
        <label for="v_entrada">Data de Entrada:</label>
        <input type="date" id="v_entrada" name="v_entrada" required>
        
        <label for="v_saida">Data de Saída:</label>
        <input type="date" id="v_saida" name="v_saida" required>
        
        <label for="quartos">Número de Quartos:</label>
        <input type="number" id="quartos" name="quartos" min="1" required>

        <label for="pessoas">Número de Pessoas por Quarto:</label>
        <input type="number" id="pessoas" name="pessoas" min="1" required>
        
        <button type="button" onclick="adicionarAoCarrinho()">Reservar</button>
    </form>

    <div class="gallery">
        <div class="gallery-item">
            <img src="IMG/suite1.jpg" alt="Quarto 1">
            <p>Quarto Standard</p>
        </div>
        <div class="gallery-item">
            <img src="IMG/suite2.jpg" alt="Quarto 2">
            <p>Quarto Luxo</p>
        </div>
        <div class="gallery-item">
            <img src="IMG/suite3.jpg" alt="Quarto 3">
            <p>Quarto Família</p>
        </div>
    </div>
</div>

<footer>
    <div>
        <p>&copy; <?php echo date("Y"); ?> Live Palace Hotel. Todos os direitos reservados a Larissa Tauanny.</p>
    </div>
</footer>

<script>
    // Função para adicionar a reserva ao carrinho sem recarregar a página
    function adicionarAoCarrinho() {
        document.getElementById("reservaForm").submit();
    }
</script>

</body>
</html>
