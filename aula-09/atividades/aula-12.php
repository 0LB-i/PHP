<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <h4>Nome: Gabriel Brandão Machado</h4>
    <h4>Data: 25/10/2022</h4>
    <h4>Disciplina: Desenvolvimento de Aplicações para Internet</h4>
    <h4>Profressor: Jonas Alberto Dhein</h4>

    <?php 
    
    $arrayS = ["Cabra", "Peixe", "Tartaruga", "Boi", "Pato"];

    echo '<h4>1 - Array de Strings</h4>';

    for ($i=0; $i < count($arrayS); $i++) { 
        echo $arrayS[$i] . '<br>';
    }

    array_unshift($arrayS, "Capivara");

    echo '<h4>2 - Inserção no array</h4>';

    for ($i=0; $i < count($arrayS); $i++) { 
        echo $arrayS[$i] . '<br>';
    }

    echo '<h4>3 - Localizando Elemento no Array</h4>';

    echo '<p>> Localizando um Peixe no Array</p>';

    if (in_array("Peixe", $arrayS)) { 
        echo "Existe Peixe";   
    } else  {     
        echo "Não Existe Peixe";
    }

    echo '<p>> Localizando um Leão no Array</p>';

    if (in_array("Leão", $arrayS)) { 
        echo "Existe Leão";   
    } else  {     
        echo "Não Existe Leão";
    }

    echo '<h4>4 - Determinado a Quantidade de Caracteres da Frase</h4>';

    $frase = "Eu sou o Batman";
    
    echo $frase . '<br>';
    echo '<p>Total de carcteres: ' . mb_strlen($frase) . '</p>';

    echo '<h4>5 - Comvertendo a Frase para Maiúsculo de duas Formas</h4>';

    echo '<P>A frase é: ' . $frase . '</p>';

    echo '<p>mb_convert_case = ' . mb_convert_case($frase, MB_CASE_UPPER) . '</p>';
    echo '<p> mb_strtoupper = ' .  mb_strtoupper($frase) . '</P>';
    ?>
</body>
</html>



