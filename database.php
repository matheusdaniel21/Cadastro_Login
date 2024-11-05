<?php

$nome = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["password"];
$pass2 = $_POST["password1"];

$pdo = new PDO("mysql: host=localhost; dbname=cadastropdo", 'root', '123456');

if(empty($nome) || empty($email) || empty($pass) || empty($pass2)){
    echo "Campos não preenchidos";
    header("Location: cadastro.html");
}

if(!empty($pass) == !empty($pass2)){
    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) values (:nome, :email, :senha)");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":senha", $pass);
    $stmt->execute();

    header("location: login.html");
} else{
    echo "Senhas diferentes";
}


