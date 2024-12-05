<?php
include 'conexao.php';
include 'usuario-banco.php';

$email = $_POST['email'];
$senha = $_POST['senha'];
$destino = "Location: login-erro.php";
$usuario = validaUsuario($conexao, $email, $senha);


if ($usuario === true) {
    $_SESSION["USUARIO"] ["EMAIL"] = $email;
    $destino = "Location: plataforma.php";
}

header($destino);
die();


?>