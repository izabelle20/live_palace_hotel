<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "hotel";

// Cria conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>
