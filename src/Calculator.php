<?php

namespace App;

class Calculator
{
    public function sum(int $firstValue, int $secondValue ): int 
    {
        return $firstValue + $secondValue;
    }

    public function multiplication(int $value1, int $value2): int
    {
        return $value1 * $value2;
    }

    public function isEven(int $valueEven): bool 
    {
        return $valueEven % 2 === 0;
    }  
}