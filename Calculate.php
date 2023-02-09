<?php

class Calculate {
    public $total = 0;


    public function addOne(){
        $this->total += 1;
        return $this;
    }

    public function addTwo(){
        $this->total += 2;
        return $this;

    }

    public function addThree(){
        $this->total += 3;
        return $this;

    }

    public function addFour(){
        $this->total += 4;
        return $this;

    }

    public function getTotal(){
        return $this->total;
    }
}

?>