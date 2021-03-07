<?php

namespace spec\Calculator;

use Calculator\Calculator;
use Calculator\Operator;
use PhpSpec\ObjectBehavior;

class CalculatorSpec extends ObjectBehavior
{
    function it_handles_addition(Operator $addition, Operator $substraction, Operator $multiplication)
    {
        $addition->supports('add')->willReturn(true);
        $addition->apply(1,1)->willReturn(2);
        $operators = [$addition, $substraction, $multiplication];
        $this->beConstructedWith($operators);
        $this->handle('add', 1, 1)->shouldReturn(2);
    }

    function it_handles_multiplication(Operator $addition, Operator $substraction, Operator $multiplication)
    {
        $multiplication->supports('multiply')->willReturn(true);
        $multiplication->apply(2,2)->willReturn(4);
        $operators = [$addition, $substraction, $multiplication];
        $this->beConstructedWith($operators);
        $this->handle('multiply', 2, 2)->shouldReturn(4);
    }

    function it_handles_substraction(Operator $addition, Operator $substraction, Operator $multiplication)
    {
        $substraction->supports('substract')->willReturn(true);
        $substraction->apply(2,2)->willReturn(0);
        $operators = [$addition, $substraction, $multiplication];
        $this->beConstructedWith($operators);
        $this->handle('substract', 2, 2)->shouldReturn(0);
    }
}
