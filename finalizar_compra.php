<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra - Live Palace Hotel</title>
    <link rel="stylesheet" href="CSS/finalizar_compra.css">
</head>
<body>

<header>
    <img src="IMG/logo.png" alt="Logo Live Palace Hotel">
    <div>
        <button onclick="window.location.href='index.php'">Home</button>
        <button onclick="window.location.href='index.php'">Voltar ao Carrinho</button>
        <button onclick="window.location.href='sair.php'">Sair</button>
    </div>
</header>

<div class="container">
    <h2>Finalizar Compra</h2>
    <form action="processar_compra.php" method="post">
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Endereço de E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>

        <label for="endereco">Endereço de Entrega:</label>
        <textarea id="endereco" name="endereco" required></textarea>

        <label for="forma_pagamento">Forma de Pagamento:</label>
        <select id="forma_pagamento" name="forma_pagamento" required>
            <option value="cartao_credito">Cartão de Crédito</option>
            <option value="boleto">Boleto Bancário</option>
            <option value="paypal">PayPal</option>
        </select>

        <button type="submit">Finalizar Compra</button>
    </form>
</div>

<footer>
    <div>
        <p>&copy; <?php echo date("Y"); ?> Live Palace Hotel. Todos os direitos reservados a Larissa Tauanny.</p>
    </div>
</footer>

</body>
</html>
