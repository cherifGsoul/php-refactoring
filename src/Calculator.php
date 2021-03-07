<?php

declare(strict_types=1);

namespace Calculator;

class Calculator
{
    private iterable $operators;

    public function __construct(iterable $operators)
    {
        $this->operators = $operators;
    }

    public function handle(string $operation, float ...$numbers)
    {
        foreach ($this->operators as $operator) {
            if($operator->supports($operation)) {
                return $operator->apply(...$numbers);
            }
        }
    }
}
