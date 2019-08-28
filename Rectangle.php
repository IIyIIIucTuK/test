<?php


class rectangle
{
    public $a, $b;

    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getSquare(){
        return $this->a * $this->b;
    }

}