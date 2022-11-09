<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$array = [
    "PHP",
    "Java",
    "JavaScript"
];

var_dump($array);

$assoc = [
    "Lang1" => "PHP",
    "Lang2" => "Java",
    "Lang3" => "JavaScript",
];

array_unshift($array, "C#", "C++"); //adicionando novos itens na frente do vetor

array_push($array, "Assembly"); //adiciona um novo elemento no final do vetor

var_dump($assoc, $array);

$novo_array = ["Ruby", "React"] + $array;

var_dump($novo_array);

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

$novo_assoc = $assoc;

sort($novo_array); // Ordena através da ordem alfabétia

var_dump($novo_array);

ksort($assoc); // Ordena pela chave

var_dump($assoc);

asort($novo_assoc);  //ordenação através do valor do item e mantem a chave ao invés de retornar apenas o índice

var_dump($novo_assoc);

$reverse_array = [
    "A","B","F","Z","X"
];

echo "<h6>ordenação reversa do valor do item</h6>";
$novo_reverse_array = array_reverse($reverse_array, true);
var_dump($novo_reverse_array);


/*
    1 - Segue o ARRAY:
    ["A", "B", "X", "Z", "F", "E", "J", "Ç"]
    -> imprima este array em ordem alfabética
    -> imprima este array em ordem alfabética ao contrário 
 */

echo "Ordenando em Ordem Alfabética";

$vetor = ["A", "B", "X", "Z", "F", "E", "J", "Ç"];

sort($vetor);

var_dump($vetor);

echo "<br>";
echo "Ordenando em Ordem Alfabética ao Contrário";
echo "<br>";

$vetor_Reverse = array_reverse($vetor, true);

var_dump($vetor_Reverse);

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump(
    array_keys($array),
    array_values($array)
);

echo "<h5>Verificar se existe PHP dentro do array</h5>";
if(in_array("PHP", $array)){
    echo "TEM PHP!";
}

$separator = ", ";

//implode
$arrayToString = implode($separator, $array);

echo "<h4>Array em String: " . $arrayToString . "</h4>";

//explode
$arrayDeNovo = explode($separator, $arrayToString);
echo var_dump($arrayDeNovo);

/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);
