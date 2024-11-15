<?php
$host = 'sql313.infinityfree.com';
$user = 'if0_37721113';
$pass = 'klkValSFU0fMo';
$dbname = 'if0_37721113_bd1';

// Criar a conexão
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}
mysqli_set_charset($conexao, "utf8")
?>
