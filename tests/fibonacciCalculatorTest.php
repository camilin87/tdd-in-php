<?php
    require "src/fibonacciCalculator.php";

    class FibonacciCalculatorTest extends PHPUnit_Framework_TestCase{
        public function testFibonacci(){
            $c = new FibonacciCalculator;

            $n = $c->Get(0);

            $this->assertEquals(0, $n);
        }
    }
?>