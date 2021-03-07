<?php


namespace Calculator\Operator;


use Calculator\Operator;

class Substraction implements Operator
{

    public function supports(string $operation)
    {
        return 'substract' === $operation;
    }

    public function apply(float ...$numbers)
    {
        return array_reduce($numbers, function($carry, $number) {
            return $number - $carry;
        }, 0);
    }
}