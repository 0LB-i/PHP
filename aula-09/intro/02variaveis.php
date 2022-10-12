<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$nome = 'Gabriel';
$idade = 19;
$cidade = 'Tabaí';

echo "<h4>Meu nome é {$nome}, tenho {$idade} anos de idade e moro em {$cidade}.</h4>";

$pre_formatado = "<h4>Meu nome é %s, tenho %d anos de idade e moro em %s.</h4>";

printf($pre_formatado, $nome, $idade, $cidade);

var_dump([
    "Variável" => $idade
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;

$idade_pessoa = 19;

$maior_idade = ($idade_pessoa >= 18);

echo "Maior de Idade = " . ($maior_idade ? "SIM" : "NÃO");

var_dump([$true, $false, $maior_idade]);

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<h3>Titulo H3</h3><h4>Titulo H4</h4>";

$cleanCode = call_user_func("strip_tags", $code);

echo $code;
echo $cleanCode;

var_dump([
    'code' => $code,
    'cleanCode' => $cleanCode
]);

$retorno = function($param){
    echo "Saída = " . $param;
};

$retorno("UNIVATES");

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Gabriel";
$array = array("Olá","Mundo");
$objeto = new stdClass();
$objeto -> nome = $string;

$int = 10;
$float = 127.989;
$null = null;

echo "<pre>";
    var_dump([
        $string,
        $array,
        $objeto,
        $int,
        $float,
        $null
    ]);
echo "</pre>";


fullStackPHPClassSession("Exercício",__LINE__);
/*
1 - Crie dois objetos com os atributos nome e idade.
Preencha os atributos dos dois objetos e em seguida
faça um teste mostrando qual é a pessoa que possui a idade mais avançada
*/

$pessoa1 = new stdClass;
$pessoa1 -> nome = "Gabriel";
$pessoa1 -> idade = 22;

$pessoa2 = new stdClass;
$pessoa2->nome = "Pedro";
$pessoa2->idade = 50;

if($pessoa1->idade > $pessoa2->idade){
    echo $pessoa1->nome . " é a pessoa mais velha";
}else if($pessoa2->idade > $pessoa1->idade){
    echo $pessoa2->nome . " é a pessoa mais velha";
}else{
    echo "Ambos têm a mesma idade";
}

echo "<br>";

/*
    2 - Dado o seguinte texto: <p>Olá <span><i>mundo</i></span></p>, realize um comando ECHO
    que consiga mostra o testo sem as marcações HTMl.
*/

$code2 = "<p>Olá <span><i>mundo</i></span></p>";

$cleanCode = call_user_func("strip_tags", $code2);

echo "<br>";

echo $cleanCode;