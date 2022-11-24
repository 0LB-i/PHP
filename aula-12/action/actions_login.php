<?php

session_start();

$conexao = require('../database/config.php');

$usuario = $_POST["user"];
$senha = $_POST["senha"];

$sql = "SELECT id, nome FROM usuarios WHERE login = :login AND senha = md5(:senha);";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(":login", $usuario);
$stmt->bindValue(":senha", $senha);

$stmt->execute();
$retorno = $stmt ->fetch(PDO::FETCH_ASSOC);

if ($retorno) {
    echo "Olá " . $retorno["nome"];
    $_SESSION["erro"] = "";
}else{
    $_SESSION["erro"] = "Dados de acesso inválidos";
    header('Location: ../login.php');
}