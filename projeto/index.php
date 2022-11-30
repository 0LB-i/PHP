<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <?php include('componentes/js.php') ?>

   
</head>
<body>
    
    <?php include('menu.php') ?>

   

    <button class="btn btn-primary" onclick="confirmar_logout()">SAIR</button>
</body>
</html>


