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


/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);


/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);