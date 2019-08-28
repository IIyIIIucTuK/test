<?php


class triangle
{
    public $a, $b, $c;
    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getSquare()
    {
        $half = ($this->a + $this->b + $this->c)/2;
        return sqrt(($half * ($half - $this->a) * ($half - $this->b) * ($half - $this->c)));
    }
}