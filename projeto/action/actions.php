<?php
session_start();
//abrir uma conexão com o banco de dados
$conexao = require('../database/config.php');

//verifica se o tipo está definido
if(!isset($_GET['tipo'])){
    header('Location: ../index.php');
}

$tipo = $_GET['tipo'];

if($tipo == 'cliente'){

    $nome = $_POST["nome"];
    $id = $_POST["id"];
    $email = $_POST["email"];

    if(!isset($nome) || $nome == ''){
        $_SESSION['erro'] = "Informe um nome para o cliente";
        header('Location: ../cliente.php');
        exit();
    }

    if(!isset($email) || $email == ''){
        $_SESSION['erro'] = "Informe um e-mail para o cliente";
        header('Location: ../cliente.php');
        exit();
    }

    if (isset($id) && $id != '') {
        $sql = "UPDATE clientes SET nome = ?, email = ? WHERE id = ?";
        $stmt = $conexao->prepare($sql);
        $return = $stmt->execute([$nome, $email, $id]);

        if ($return) {
            $_SESSION['sucesso'] = "Cliente alterado com sucesso!";
            header('Location: ../lista-clientes.php');
            exit();
        }
    } else {
        $sql = "INSERT INTO clientes (nome, email) VALUES(?, ?)";
        $stmt = $conexao->prepare($sql);
        $return = $stmt->execute([$nome, $email]);

        if ($return) {
            $_SESSION['sucesso'] = "Cliente incluído com sucesso!";
            header('Location: ../lista-clientes.php');
            exit();
        }
    }   

} else {
    header('Location: ../index.php');
    exit();
}