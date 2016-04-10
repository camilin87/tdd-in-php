<?php
    require "src/fibonacciCalculator.php";

    class FibonacciCalculatorTest extends PHPUnit_Framework_TestCase{
        public function testFirstFibonacciNumber(){
            $c = new FibonacciCalculator;

            $n = $c->Get(0);

            $this->assertEquals(0, $n);
        }

        public function testSecondFibonacciNumber(){
            $c = new FibonacciCalculator;

            $n = $c->Get(1);

            $this->assertEquals(1, $n);
        }

        public function testThirdFibonacciNumber(){
            $c = new FibonacciCalculator;

            $n = $c->Get(2);

            $this->assertEquals(1, $n);
        }
    }
?>