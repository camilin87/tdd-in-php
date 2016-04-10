<?php 
class FibonacciCalculator {
    public function Get($index) {
        if ($index < 2){
            return $index;
        }

        return $this->Get(1) + 0;
    }
}
?>