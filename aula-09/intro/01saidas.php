<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */

fullStackPHPClassSession("echo", __LINE__);

$hello = "Olá Mundo";

echo $hello;

echo "<h1>{$hello}</h1>";

// , = Junta textos em um comando echo

echo "<h1>$hello</h1>","<h2>$hello</h2>","<h3>$hello</h3>";

echo "<h5>" . $hello . "</h5>";

echo "<h6>" . $hello . "</h6>";

echo '<span class="tag">' . $hello . '</span>';

?>

<h2><?= $hello?></h2>

<?php

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

print("<h1>$hello</h1>");

print "<h2>$hello</h2>";

print "<h3>$hello, " . "$hello</h3>";

print "<h4>Escreva: {$hello}</h4>";

/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

//imprime um array

$array = ["Teotônia", "Lajeado", "Tabaí"];

print_r($array);

$vetor = print_r($array,true); //conm o true ele não imprime na tela, e devolve o resultado para outra variável

echo "<br>";
print($vetor);

echo "<br>";
echo "<pre>".$vetor."</pre>";

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

$article = "<article><h2>%s</h2><p>%s</p></article>";

$titulo = "Título da notcía";
$noticia = "Em linguística, a noção de texto é ampla e ainda aberta a uma definição mais precisa. Grosso modo, pode ser entendido como manifestação linguística das ideias de um autor.";

printf($article,$titulo,$noticia);

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__); //é igual ao printf mas possibilita mandar um array tbm

$company = "<article><h2>Instituição: %s</h2><p>Curso: %s</p></article>";

$array_company = ["UNIVATES","Técnico em Informática"];

vprintf($company, $array_company);

/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

var_dump($company);