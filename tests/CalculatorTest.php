<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $sum, 
            "La méthode sum() ne fonctionne plus :-("
        );
    }

    public function testMultiplication(): void
    {
        //Arrange
        $value1 = 5;
        $value2 = 5;
        $expectedResult = 25;

        //Act
        $calculator = new Calculator();
        $sumMult = $calculator->multiplication($value1, $value2);
        
        //Assert
        $this->assertSame($expectedResult, $sumMult, 
            "La méthode multiplication() ne fonctionne plus :-("
        );
    }

    public function testEven(): void
{
    // Arrange
    $evenValue1 = 6;

    // Act
    $calculator = new Calculator();
    $isEven1 = $calculator->isEven($evenValue1);

    // Assert
    $this->assertTrue($isEven1,
        "La méthode isEven() ne fonctionne plus :-("
    );
}
}