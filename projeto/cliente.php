<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
}
//abrir conexão com o banco de dados
$conexao = require('database/config.php');
$cliente = null;

if (isset($_GET['id'])) {
    
    $id = $_GET["id"];

    $sql = "SELECT * FROM clientes WHERE id = :id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':id',$id);

    $stmt->execute(); //Executa o SQL com os parâmetros passados acima
    $retorno = $stmt->fetch(PDO::FETCH_ASSOC); //armazena na variavel retorno, os dados obtidos da consulta
    if ($retorno) {
        $cliente = $retorno;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinte</title>

    <?php include('componentes/js.php') ?>
   
</head>
<body>
    
    <div class="container">
        <?php include('menu.php') ?>
        
        <div class="row">
            <div class="col-sm-12">

                    <form method="post" action="action/actions.php?tipo=cliente">

                        <input type="hidden" class="form-control" name="id" 
                        value="<?php echo ($cliente != null ? $cliente['id'] : '') ?>">

                        <div class="row mb-2 mt-2">
                            <div class="col-sm-6 col-md-4 mb-2">
                                <label>Nome</label>
                                <input type="text" class="form-control" 
                                name="nome" placeholder="Nome"
                                value="<?php echo ($cliente != null ? $cliente['nome']:'') ?>">
                            </div>

                            <div class="col-sm-6 col-md-4 mb-2">
                                <label>E-mail</label>
                                <input type="email" class="form-control"
                                name="email" placeholder="E-mail"
                                value="<?php echo ($cliente != null ? $cliente['email']:'') ?>">
                            </div>

                            <div class="col-sm-6 col-md-4 mb-2">
                                <label>Telefone</label>
                                <input type="text" class="form-control"
                                name="telefone" placeholder="Telefone"
                                value="<?php echo ($cliente != null ? $cliente['telefone']:'') ?>">
                            </div>

                            <div class="col-sm-6 col-md-4 mb-2">
                                <label>Data de Nascimento</label>
                                <input type="date" class="form-control"
                                name="dataNascimento"
                                value="<?php echo ($cliente != null ? $cliente['dataNascimento']:'') ?>">
                            </div>
                            
                            <div class="col-sm-6 col-md-4">
                                <label>Cidade</label>
                                <select class="form-control" name="id_cidade">
                                    <?php 
                                    $stmt = $conexao->prepare("SELECT id, cidade FROM cidades ORDER BY cidade");
                                    $stmt->execute();
                                    echo "<option value='0'>SELECIONE...</option>";
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                        if ($cliente != null && $cliente['id_cidade'] == $row['id']) {
                                            echo "<option selected value='" . $row['id'] . "'>" . 
                                                $row['cidade'] . "</option>";
                                        } else {
                                            echo "<option value='" . $row['id'] . "'>" . $row['cidade'] .
                                            "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <input class="btn btn-warning mb-2" value="Limpar" type="reset">
                        <button class="btn btn-primary mb-2 ms-2" type="submit">Salvar</button>
                    </form>

                    <button class="btn btn-secondary" onclick="confirmar_logout()">SAIR</button>
            </div>
        </div>
    </div>    

</body>
</html>

