<?php
$host = 'localhost';
$user = 'root';
$pass = 'admin';
$dbname = 'agendamento_anapaula';

// Criar a conexão
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}
?>
