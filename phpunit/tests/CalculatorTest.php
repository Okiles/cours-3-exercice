<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new \App\Calculator();
        $result = $calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testSub()
    {
        $calculator = new \App\Calculator();
        $result = $calculator->sub(2, 1);
        $this->assertEquals(1, $result);
    }

    public function testMul()
    {
        $calculator = new \App\Calculator();
        $result = $calculator->mul(2, 3);
        $this->assertEquals(6, $result);
    }

    public function testDiv()
    {
        $calculator = new \App\Calculator();
        $result = $calculator->div(6, 3);
        $this->assertEquals(2, $result);
    }

    public function testPow()
    {
        $calculator = new \App\Calculator();
        $result = $calculator->pow(2, 3);
        $this->assertEquals(8, $result);
    }

    public function testSqrt()
    {
        $calculator = new \App\Calculator();
        $result = $calculator->sqrt(9);
        $this->assertEquals(3, $result);
    }

    public function testSplitFloat()
    {
        $calculator = new \App\Calculator();
        $result = $calculator->splitFloat(11.48);
        $this->assertEquals([11, 48], $result);
    }

    public function testGenerateRandomCalculatorName()
    {
        $calculator = new \App\Calculator();
        $result = $calculator->generateRandomCalculatorName();
        $this->assertIsString($result);
    }
}
