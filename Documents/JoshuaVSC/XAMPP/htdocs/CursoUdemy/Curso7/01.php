<?php

$conn = new mysqli('localhost', 'root', 'dbphp7');

if ($conn->connect_error) {

    echo "Erro: ".$conn->connect_error;
    exit;

}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$stmt->bind_param("ss", $user, $pass);

$user = "user";
$pass = "12345";

$stmt->execute();

?>