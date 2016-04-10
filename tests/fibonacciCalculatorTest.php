<?php
    require "src/fibonacciCalculator.php";

    class FibonacciCalculatorTest extends PHPUnit_Framework_TestCase{
        public function testSecondFibonacciNumber(){
            $c = new FibonacciCalculator;

            $n = $c->Get(1);

            $this->assertEquals(1, $n);
        }

        public function testFirstFibonacciNumber(){
            $c = new FibonacciCalculator;

            $n = $c->Get(0);

            $this->assertEquals(0, $n);
        }
    }
?>