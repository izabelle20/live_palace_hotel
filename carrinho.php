<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho - Live Palace Hotel</title>
    <link rel="stylesheet" href="carrinho.css">
</head>
<body>
    <header>
        <img src="IMG/logo.png" alt="Logo Live Palace Hotel">
        <div>
            <button onclick="window.location.href='index.php'">Home</button>
            <button onclick="window.location.href='consumo.php'">Voltar ao Consumo</button>
            <button onclick="window.location.href='sair.php'">Sair</button>
        </div>
    </header>

    <div class="container">
        <h2>Carrinho de Compras</h2>
        <?php
        if (empty($_SESSION['carrinho'])) {
            echo "<p>Seu carrinho está vazio.</p>";
        } else {
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Item</th>";
            echo "<th>Preço Unitário</th>";
            echo "<th>Quantidade</th>";
            echo "<th>Total</th>";
            echo "<th>Ação</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            $total_geral = 0;
            foreach ($_SESSION['carrinho'] as $item => $detalhes) {
                $preco = $detalhes['preco'];
                $quantidade = isset($detalhes['quantidade']) ? $detalhes['quantidade'] : 1;
                $total = $preco * $quantidade;
                $total_geral += $total;
            
                echo "<tr>";
                echo "<td>$item</td>";
                echo "<td>R$ " . number_format($preco, 2, ',', '.') . "</td>";
                echo "<td>$quantidade</td>";
                echo "<td>R$ " . number_format($total, 2, ',', '.') . "</td>";
                echo "<td><a href='remover_item.php?item=" . urlencode($item) . "'>Remover</a></td>";
                echo "</tr>";
            }

            // Cálculo do desconto (exemplo: 10%)
            $desconto = $total_geral * 0.1;
            $total_com_desconto = $total_geral - $desconto;

            echo "<tr>";
            echo "<td colspan='3'><strong>Total Geral</strong></td>";
            echo "<td><strong>R$ " . number_format($total_geral, 2, ',', '.') . "</strong></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='3'><strong>Desconto (10%)</strong></td>";
            echo "<td><strong>R$ " . number_format($desconto, 2, ',', '.') . "</strong></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='3'><strong>Total com Desconto</strong></td>";
            echo "<td><strong>R$ " . number_format($total_com_desconto, 2, ',', '.') . "</strong></td>";
            echo "</tr>";

            echo "</tbody>";
            echo "</table>";
            echo "<button onclick=\"window.location.href='finalizar_compra.php'\">Finalizar Compra</button>";
        }
        ?>
    </div>

    <footer>
        <div>
            <p>&copy; <?php echo date("Y"); ?> Live Palace Hotel. Todos os direitos reservados a Larissa Tauanny.</p>
        </div>
    </footer>
</body>
</html>
