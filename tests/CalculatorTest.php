<?php
namespace App\Tests;
use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{
    public function testAdd() :void{
        $c = new Calculator();
        $result=$c->add(2,4);
        $j=6;
       $this->assertEquals($j,$result);
    }
}