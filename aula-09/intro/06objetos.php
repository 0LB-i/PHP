<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Manipulação de objetos");
/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$objeto = new stdClass();
$objeto->name = "Gabriel";
$objeto->company = "Univates";

$array = [
    "name" => "Gabriel",
    "company" => "Univates"
];

echo var_dump($array);

//Criar um objeto através de um Array

$objPessoa = (object)$array;

echo var_dump($objPessoa);

echo var_dump($objeto);

//Acessando informações através do array

echo "<h4>Meu nome é {$array["name"]}</h4>";

//acessando informação através do objeto
echo "<h4>Minha empresa é a {$objPessoa->company}</h4>";



/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

