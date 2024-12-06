<?php

session_start();

$nome = $_POST["name"];
$email = $_POST["email1"];
$pass = $_POST["password2"];

$ipUsuario = $_SERVER['REMOTE_ADDR'];

$pdo = new PDO("mysql: host=localhost; dbname=cadastropdo", 'root', '123456');

$stmt = $pdo->prepare("SELECT nome, email, senha FROM usuarios WHERE email = :email");
$stmt->bindParam(":email", $email);
$stmt->execute();

$userData = $stmt->fetch(PDO::FETCH_ASSOC);

if(empty($email) && empty($pass)){
    header("Location: login.html");
} elseif($email == $userData["email"] && $pass == $userData["senha"]){
    session_start();
    $_SESSION["logado"] = $email;
    $_SESSION["user"] = $userData["nome"];

    setcookie("IP", $ipUsuario);
    $_COOKIE["IP"];

    header("Location: conteudo.php");
} else{
    echo "Email ou senha incorretos";
    header("Location: login.html");
}

