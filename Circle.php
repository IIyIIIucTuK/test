<?php


class circle
{
    public $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getSquare()
    {
        return M_PI * ($this->radius * $this->radius);
    }
}