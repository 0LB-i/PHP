<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Uma classe DateTime");

define("DATE_BR", "d/m/y H:i:s");


/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);

$dateNow = new DateTime();
$birthDate = new DateTime("2002-10-31");

//Exemplo de criação do tipo DateTime através de uma String em outro formato
$dateStatic = DateTime::createFromFormat(DATE_BR, "08/11/2022 21:00:00");

var_dump(
    $dateNow,
    $dateStatic,
    $birthDate
);

//Conversão de Y-m-d -> d-m-y

echo "<h5>" . $dateNow->format(DATE_BR) . "</h5>";
echo "<h5>" . $birthDate->format("d/m/Y") . "</h5>";


/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);


/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);
