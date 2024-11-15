<?php
$host = 'mysql.railway.internal';
$port = '3306';
$user = 'root';
$pass = 'LAQSpZVlqbASqfPTzTdBlIseoKcZGBqx';
$dbname = 'railway';

// Criar a conexão
$conn = new mysqli($host, $port, $user, $pass, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}
?>
