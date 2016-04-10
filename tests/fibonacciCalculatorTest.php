<?php
    require "src/fibonacciCalculator.php";

    class FibonacciCalculatorTest extends PHPUnit_Framework_TestCase{
        public function testFibonacci(){
            new FibonacciCalculator().Get(0);
        }
    }
?>