<?php
session_start();

// Verificar se o carrinho já existe, senão, inicializa como um array vazio
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

// Adicionar item ao carrinho
if (isset($_GET['item']) && isset($_GET['preco'])) {
    $item = urldecode($_GET['item']);
    $preco = urldecode($_GET['preco']);

    // Verificar se o item já está no carrinho
    if (isset($_SESSION['carrinho'][$item])) {
        // Incrementar a quantidade
        $_SESSION['carrinho'][$item]['quantidade'] += 1;
    } else {
        // Adicionar novo item ao carrinho
        $_SESSION['carrinho'][$item] = array('preco' => $preco, 'quantidade' => 1);
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo - Live Palace Hotel</title>
    <link rel="stylesheet" href="CSS/consumo.css">
</head>
<body>
    <header>
        <img src="IMG/logo.png" alt="Logo Live Palace Hotel">
        <div>
            <button onclick="window.location.href='index.php'">Home</button>
            <button onclick="window.location.href='carrinho.php'">Carrinho de compras</button>
            <button onclick="window.location.href='galeria.php'">Galeria</button>
            <button onclick="window.location.href='sair.php'">Sair</button>
        </div>
    </header>

    <div class="container" style="text-align: center;">
        <h2>Página de Consumo</h2>
        <p>Bem-vindo à galeria de consumo do Hotel.</p>

        <div class="consumo">
            <h3>Itens de Consumo</h3>
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Preço</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $consumo = array(
                        "Café/Café com Leite" => 2.50,
                        "Bolinho" => 5.00,
                        "Água" => 4.50,
                        "Whisky (Royal Salute 21)" => 1090.00,
                        "Feijoada" => 25.00,
                        "Pizza (sabores ao seu critério/não é incluso bebida)" => 22.50,
                        "Prato Especial (Risoto de Camarão)" => 49.99
                    );

                    foreach ($consumo as $item => $preco) {
                        echo "<tr>";
                        echo "<td>$item</td>";
                        echo "<td>R$ " . number_format($preco, 2, ',', '.') . "</td>";
                        echo "<td><a href='consumo.php?item=" . urlencode($item) . "&preco=" . urlencode($preco) . "'>Adicionar ao Carrinho</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <div>
            <p class="copyright" id="direitos_reservados">&copy; <?php echo date("Y"); ?> Live Palace Hotel. Todos os direitos reservados a Larissa Tauanny.</p>
        </div>
    </footer>
</body>
</html>
