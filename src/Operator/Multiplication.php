<?php


namespace Calculator\Operator;


use Calculator\Operator;

class Multiplication implements Operator
{

    public function supports(string $operation)
    {
        return 'multiply' === $operation;
    }

    public function apply(float ...$numbers)
    {
        return array_reduce($numbers, fn($carry, $number) => $carry * $number, 1);
    }
}