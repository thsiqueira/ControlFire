<?php
session_start();
if (!isset($_SESSION["USUARIO"])){
    $usuario = array ();
    $usuario["EMAIL"] = null;
    $usuario["SENHA"] = null;

    $_SESSION["USUARIO"] = $usuario;
}