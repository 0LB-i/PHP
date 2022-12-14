<?php
session_start();
//abrir conexão com o banco de dados
$conexao = require('../database/config.php');

$tabela = $_GET["tabela"];
$chave = $_GET["id"];

$sql = "UPDATE" . $tabela . " SET excluido = true WHERE id = ?";
$stmt = $conexao->prepare($sql);
$return = $stmt->execute([$chave]);

if ($return) {
    $_SESSION['sucesso'] = "Registro excluido com sucesso!";
    header('Location: ../index.php');
    exit();
}