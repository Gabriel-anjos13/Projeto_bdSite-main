<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

// Verifica se há uma mensagem de sucesso para o agendamento
$agendamento_sucesso = isset($_SESSION['agendamento_sucesso']) ? $_SESSION['agendamento_sucesso'] : null;
unset($_SESSION['agendamento_sucesso']); // Remove a mensagem da sessão após exibir
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>

        /* Estilos globais */
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding-top: 50px;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            background-color: #fafafa;
        }

        input:focus {
            border-color: #007bff;
            outline: none;
            background-color: #fff;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            font-size: 1rem;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            text-align: center;
        }
    </style>

</head>
<body>

    <div class="container">
        <h1>Agendar Procedimento</h1>

        <?php if ($agendamento_sucesso): ?>
            <div class="message">
                <p>Agendamento realizado com sucesso!</p>
                <p><strong>Data:</strong> <?= htmlspecialchars($agendamento_sucesso['data_agendamento']) ?></p>
                <p><strong>Hora:</strong> <?= htmlspecialchars($agendamento_sucesso['hora_agendamento']) ?></p>
                <p><strong>Procedimento:</strong> <?= htmlspecialchars($agendamento_sucesso['procedimento']) ?></p>
            </div>
        <?php endif; ?>

        <!-- Formulário de agendamento -->
        <form action="../actions/agendar.php" method="POST">
            <label for="data_agendamento">Data do Agendamento:</label>
            <input type="date" id="data_agendamento" name="data_agendamento" required><br>

            <label for="hora_agendamento">Hora do Agendamento:</label>
            <input type="time" id="hora_agendamento" name="hora_agendamento" required><br>

            <label for="procedimento">Procedimento:</label>
            <input type="text" id="procedimento" name="procedimento" required><br>

            <button type="submit">Agendar</button>
        </form>

        <a href="index.php">Sair</a> <!-- Link para sair e voltar ao login -->
    </div>

</body>
</html>
