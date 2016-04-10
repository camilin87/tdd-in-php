<?php
    require "src/fibonacciCalculator.php";

    class FibonacciCalculatorTest extends PHPUnit_Framework_TestCase{
        public function testFibonacci(){
            $c = new FibonacciCalculator;
            $c->Get(0);
        }
    }
?>