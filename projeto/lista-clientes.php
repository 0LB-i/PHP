<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
}
?>

<?php
$conexao = require('./database/config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>

    <?php include('componentes/js.php') ?>

    <style>
        .btn{
            margin-top: 10px;
        }
    </style>

</head>
<body>
    
    <?php include('menu.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <a class='btn btn-block btn-primary' href='cliente.php'>Novo Cliente</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            $stmt = $conexao->prepare("SELECT * FROM clientes ORDER BY nome");
                            $stmt->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                echo '<tr> 
                                    <td>'.$row['nome'].'</td>

                                    <td>' .$row['email'].'</td>

                                    <td class="td">
                                        <a class="btn btn-md btn-success" href="cliente.php?id='.$row['id'] . '"> 
                                        <i class="fa fa-edit"></i>
                                        </a>

                                        <a class="btn btn-md btn-danger" href="action/delete.php?id='.$row['id'] . '&tabela=clientes">
                                        <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>';
                            }   
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>
</html>
