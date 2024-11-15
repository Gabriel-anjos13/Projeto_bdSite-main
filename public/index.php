<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>


    <div class="container">

        <h1>Login</h1>

        <?php
        if (isset($_SESSION['success_msg'])) {
            echo '<div class="message">' . $_SESSION['success_msg'] . '</div>';
            unset($_SESSION['success_msg']);
        }

        if (isset($_SESSION['error_msg'])) {
            echo '<div class="error">' . $_SESSION['error_msg'] . '</div>';
            unset($_SESSION['error_msg']);
        }
        ?>

        <form action="../actions/login.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br>

            <button type="submit">Login</button>
        </form>

        <a href="cadastro.php">Criar conta</a>
    </div>

    <script>
        setTimeout(() => {
            const message = document.querySelector('.message');
            const error = document.querySelector('.error');
            if (message) message.style.display = 'none';
            if (error) error.style.display = 'none';
        }, 5000);
    </script>
</body>
</html>
