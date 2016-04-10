<?php 
class FibonacciCalculator {
    public function Get($index) {
        if ($index < 2){
            return $index;
        }

        return $this->Get($index - 1) + $this->Get(0);
    }
}
?>