<?php

$contasCorrentes = [
    1235267890 => [
        'titular' => 'Guilherme',
        'saldo' => 1000
    ],
    1233467890 => [
        'titular' => 'Thaissa',
        'saldo' => 5000
    ],
    1232527893 => [
        'titular' => 'Maria',
        'saldo' => 3000
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}
