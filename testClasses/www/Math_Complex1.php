<?php

class Math_Complex1 {
    public $re, $im;

    function __construct($re=0, $im=0)
    {
        $this->re += $re;
        $this->im += $im;
    }

    //указали тип аргумента $y -  Math_Complex1
    public  function  add(Math_Complex1 $y)
    {
        $this->re += $y->re;
        $this->im += $y->im;

    }
    public function __toString()
    {
        return "({$this->re}, {$this->im})";
    }
}

$math_complex1 = new Math_Complex1(314, 256);
$math_complex1->add(new Math_Complex1());
$ass = $math_complex1->__toString();
echo $ass;