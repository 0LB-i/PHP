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
    $telefone = $_POST["telefone"];
    $dataNascimento = $_POST["dataNascimento"];
    $id_cidade = $_POST["id_cidade"];

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

    if(!isset($telefone) || $telefone == ''){
        $_SESSION['erro'] = "Informe o número do cliente";
        header('Location: ../cliente.php');
        exit();
    }

    if(!isset($dataNascimento) || $dataNascimento == ''){
        $_SESSION['erro'] = "Informe a data de nascimento do cliente";
        header('Location: ../cliente.php');
        exit();
    }

    if(!isset($id_cidade) || $id_cidade == ''){
        $_SESSION['erro'] = "Informe o ID da cidade do cliente";
        header('Location: ../cliente.php');
        exit();
    }

    if (isset($id) && $id != '') {
        $sql = "UPDATE clientes SET nome = ?, email = ?, telefone = ?, dataNascimento = ?, id_cidade = ? WHERE id = ?";
        $stmt = $conexao->prepare($sql);
        $return = $stmt->execute([$nome, $email, $telefone, $dataNascimento, $id_cidade, $id]);

        if ($return) {
            $_SESSION['sucesso'] = "Cliente alterado com sucesso!";
            header('Location: ../lista-clientes.php');
            exit();
        } else {
            $_SESSION['erro'] = "Erro ao alterar o perfil do cliente";
            header('Location: ../lista-clientes.php');
        }
    } else {
        $sql = "INSERT INTO clientes (nome, email, telefone, dataNascimento, id_cidade) VALUES(?, ?, ?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        $return = $stmt->execute([$nome, $email, $telefone, $dataNascimento, $id_cidade]);

        if ($return) {
            $_SESSION['sucesso'] = "Cliente incluído com sucesso!";
            header('Location: ../lista-clientes.php');
            exit();
        } else {
            $_SESSION['erro'] = "Erro ao incluir o perfil do cliente";
            header('Location: ../lista-clientes.php');
        }
    }   

} else if($tipo == 'cidades'){
    $cidade = $_POST["cidade"];
    $id = $_POST["id"];
    $sigla_estado = $_POST["sigla_estado"];

    if(!isset($cidade) || $cidade == ''){
        $_SESSION['erro'] = "Informe a cidade do cliente";
        header('Location: ../cadastro-cidade.php');
        exit();
    }

    if(!isset($sigla_estado) || $sigla_estado == ''){
        $_SESSION['erro'] = "Informe a sigla do estado do cliente";
        header('Location: ../cadastro-cidade.php');
        exit();
    }

    if (isset($id) && $id != '') {
        $sql = "UPDATE cidades SET cidade = ?, sigla_estado = ? WHERE id = ?";
        $stmt = $conexao->prepare($sql);
        $return = $stmt->execute([$cidade, $sigla_estado, $id]);

        if ($return) {
            $_SESSION['sucesso'] = "Cidade alterado com sucesso!";
            header('Location: ../cadastro-cidade.php');
            exit();
        } else {
            $_SESSION['erro'] = "Erro ao alterar o perfil da Cidade";
            header('Location: ../cadastro-cidade.php');
        }
    } else {
        $sql = "INSERT INTO cidades (cidade, sigla_estado) VALUES(?, ?)";
        $stmt = $conexao->prepare($sql);
        $return = $stmt->execute([$cidade, $sigla_estado]);

        if ($return) {
            $_SESSION['sucesso'] = "Cidade incluída com sucesso!";
            header('Location: ../lista-cidades.php');
            exit();
        }
    }
}else {
    header('Location: ../index.php');
    exit();
}