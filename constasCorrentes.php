<?php

$conta1 = [
    'titular' => 'Guilherme',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Thaissa',
    'saldo' => 5000
];
$conta3 = [
    'titular' => 'Maria',
    'saldo' => 3000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'].PHP_EOL;
}
