<?php
session_start();
//abrir conexão com o banco de dados
$conexao = require('../database/config.php');

$tabela = $_GET["tabela"];
$chave = $_GET["id"];

$sql = "DELETE FROM " . $tabela . " WHERE id = ?";
$stmt = $conexao->prepare($sql);
$return = $stmt->execute([$chave]);

if ($return && $tabela == "cidades") {
    $_SESSION['sucesso'] = "Registro excluido com sucesso!";
    header('Location: ../lista-cidades.php');
    exit();
} else if ($return && $tabela == "clientes") {
    $_SESSION['sucesso'] = "Registro excluido com sucesso!";
    header('Location: ../lista-clientes.php');
    exit();
}