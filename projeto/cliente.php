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

    <style> 
        .btn{
            margin: 10px 10px 0 0;
        }
    </style>

   
</head>
<body>
    
    <div class="container">
        <?php include('menu.php') ?>
        
        <div class="row">
            <div class="col-md-12">

                    <form method="post" action="action/actions.php?tipo=cliente">

                        <input type="hidden" class="form-control" name="id" 
                        value="<?php echo ($cliente != null ? $cliente['id'] : '') ?>">

                        <label>Nome</label>
                        <input type="text" class="form-control" 
                        name="nome" placeholder="Nome"
                        value="<?php echo ($cliente != null ? $cliente['nome']:'') ?>">

                        <label>E-mail</label>
                        <input type="email" class="form-control"
                        name="email" placeholder="E-mail"
                        value="<?php echo ($cliente != null ? $cliente['email']:'') ?>">

                        <input class="btn btn-warning" value="Limpar" type="reset">
                        <button class="btn btn-primary" type="submit">Salvar</button>
                    </form>

                    <button class="btn btn-primary" onclick="confirmar_logout()">SAIR</button>
            </div>
        </div>
    </div>    

</body>
</html>

