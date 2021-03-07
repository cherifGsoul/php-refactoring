<?php


namespace Calculator\Operator;


use Calculator\Operator;

class Addition implements Operator
{

    public function supports(string $operation)
    {
        return 'add' === $operation;
    }

    public function apply(float ...$numbers)
    {
        return array_reduce($numbers, fn($carry, $number) => $carry + $number, 0);
    }
}