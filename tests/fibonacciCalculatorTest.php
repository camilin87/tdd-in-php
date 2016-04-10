<?php
    require "src/fibonacciCalculator.php";

    class FibonacciCalculatorTest extends PHPUnit_Framework_TestCase{
        public function testFibonacci(){
            $c = new FibonacciCalculator;

            $n = $c->Get(1);

            $this->assertEquals(1, $n);
        }
    }
?>