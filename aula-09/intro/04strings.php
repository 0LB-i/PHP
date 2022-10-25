<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$curso = "Técnico em Informática";

var_dump([
    "string" => $curso,
    "strlen" => strlen($curso), //conta todos os caracteres ínclusive a acentuação
    "mb_strlen" => mb_strlen($curso), //conta todos os caracteres
    "substr" => substr($curso, 12),
    "mb_substr" => mb_substr($curso, 12),
    "strtoupper" => strtoupper($curso),
    "mb_strtoupper" => mb_strtoupper($curso),
    "strtolower" => strtolower($curso),
    "mb_strtolower" => mb_strtolower($curso),
]);

/*
    Exercício
    1 - Crie um vetor com 5 palavras e através de um laço de repetição, identifique a qauntidade
    de letras de cada palavra

    2 - Crie um laço de repetição que trasnform cada palavra em maiúsculo
 */

 $palavras = array('Casa','Pedra','Faca','Árvore','Bola');
echo "Contador de aracteres";
echo "<br> <br>";

 for ($i=0; $i < count($palavras); $i++) { 
    echo $palavras[$i] . " = " . mb_strlen($palavras[$i]) . "<br>";
 }

echo "<br>";
echo "Palavras em Maiúsculo";
echo "<br> <br>";

 for ($i=0; $i < count($palavras); $i++) { 
    echo $palavras[$i] . " = " . mb_strtoupper($palavras[$i]) . "<br>"; 
 }

echo "<br>";
echo "Mesma coisa só que com While";
echo "<br>";



/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$curso = "TÉCNICO em informárica";

var_dump([
    "strtoupper" => strtoupper($curso),
    "mb_strtoupper" => mb_strtoupper($curso),
    "strtolower" => strtolower($curso),
    "mb_strtolower" => mb_strtolower($curso),
    "mb_convert_case UPPER" => mb_convert_case($curso, MB_CASE_UPPER),
    "mb_convert_case LOWER" => mb_convert_case($curso, MB_CASE_LOWER),
    "mb_convert_case TITLE" => mb_convert_case($curso, MB_CASE_TITLE),
]);

/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$substituicao = "Programação para Internet";

echo "<h5>{$substituicao}</h5>";

echo "<h5>" . str_replace("Internet","Mobile", $substituicao) . "</h5>";

echo "<h5>" . str_replace(array("Programação", "Internet"), array("Desenvolvimento", "Mobile"), $substituicao) . "</h5>";

/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

$site = "https://www.univates.br/ead/?orig=eadga2023AI&utm_source=googles-ads&utm_medium=pesquisa&utm_campaign=EAD-2023AI&gclid=Cj0KCQjwnbmaBhD-ARIsAGTPcfVTOywte9fwKEHGVBB6W1vEUKeYd9Oyw-W_LJ4CgoLzEQlzp_F5uCwaAtIWEALw_wcB";

mb_parse_str($site, $siteComParametro);

var_dump([
    "site" => $site,
    "parametros" => $siteComParametro,
]);