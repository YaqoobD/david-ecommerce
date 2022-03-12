<?php

use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    
    public function testaAdd(){

        $calculator = new App\Calculator;
        $result = $calculator-> add(20, 5);

        $this->assertEquals(25, $result);
    }    

    public function testSubtract(){

        $calculator =  new App\Calculator;
        $result = $calculator -> subtract(20, 5);

        $this -> assertEquals(15, $result);
    }    

}    