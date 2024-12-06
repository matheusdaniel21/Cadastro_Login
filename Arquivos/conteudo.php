<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="conteudo.css">
    <title>Pagina principal</title>
</head>
<body>
    <h1 id="titulo">
        <?php
            session_start();
            echo "Seja bem vindo " . $_SESSION["user"];

            if(!isset($_SESSION["logado"])){
                include "logout.php";
            }
        ?>
    </h1>

    <img id="logo" src="PHP_logo.png" alt="logo_php"><br>
    <a id="sair" href="logout.php">Sair</a>
</body>
</html>