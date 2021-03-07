<?php

namespace Calculator;

interface Operator
{

    public function supports(string $operation);

    public function apply(float ...$numbers);
}
