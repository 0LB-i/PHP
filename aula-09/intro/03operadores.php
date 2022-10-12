<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
echo fullStackPHPClassName("Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operadorA = 10;

echo "<h5>operadorA = {$operadorA}</h5>";

$operadores = [
    "operadorA += 5" => $operadorA += 5,
    "operadorA -= 5" => $operadorA -= 5,
    "operadorA *= 5" => $operadorA *= 5,
    "operadorA /= 5" => $operadorA /= 5, 
];

var_dump($operadores);

$operadorB = 5;
$operadorC = 10;

echo "<h5>operadorB = {$operadorB}</h5>";
echo "<h5>operadorC = {$operadorC}</h5>";

$incremento = [
    "pós-incremento" => $operadorB++,
    "resultado-incremento" => $operadorB,
    "pré-incremento" => ++$operadorB,
    "pós-decremento" => $operadorC--,
    "resultado-decremento" => $operadorC,
    "pré-decremento" => --$operadorC,
];

var_dump($incremento);

/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$varA = 5;
$varB = "5";
$varC = 10;

$comparacoes = [
    "a == b" => ($varA == $varB), //valor é igual?
    "a === b" => ($varA === $varB), //valor e tipo são iguais?
    "a != b" => ($varA != $varB), //valores são diferentes?
    "a !== b" => ($varA !== $varB), //valor e tipo são diferentes?
    "a > c" => ($varA > $varC), // A é mairo que C?
    "a < c" => ($varA < $varC), // A é menor que C?
];

var_dump($comparacoes);

/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

$pessoa = new stdClass();
$pessoa->idade = 18;
$pessoa->possui_hab = true;
$pessoa->bebeu = false;

$logicos = [
    "&&" => ($pessoa->idade >= 18 && $pessoa->possui_hab),
    "||" => ($pessoa->possui_hab || $pessoa->bebeu),
];

var_dump($logicos);



/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 5;
$calcB = 10;

$calculos = [
    "a + b" => ($calcA + $calcB),
    "a - b" => ($calcA - $calcB),
    "a * b" => ($calcA * $calcB),
    "a / b" => ($calcA / $calcB),
    "a % b" => ($calcA % $calcB),
];

var_dump($calculos);

fullStackPHPClassSession("Exercício",__LINE__);

/*
    1 - Crie um array com 10 números inteiros e através de um laço de repetição,
    diga quantos destes são pares.
*/

$numeros = array(1,2,3,4,5,6,7,8,9,10);
$contador = 0;

for ($var=0; $var < count($numeros); $var++){ 

    $valor = $numeros[$var];

    if($valor%2==0){
        ++$contador;
    }
}

echo "<h4>O total de números pares é {$contador}</h4>";