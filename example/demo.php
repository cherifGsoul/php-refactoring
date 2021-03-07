<?php

declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

$operators = [
    new \Calculator\Operator\Addition(),
    new \Calculator\Operator\Multiplication(),
    new \Calculator\Operator\Substraction(),
];

$calculator = new \Calculator\Calculator($operators);

echo $calculator->handle('add', 1, 1, 1); // -> 3
echo "\n";

echo $calculator->handle('substract', 5, 1); // -> 4
echo "\n";

echo $calculator->handle('multiply', 5, 2, 10); // -> 100
echo "\n";