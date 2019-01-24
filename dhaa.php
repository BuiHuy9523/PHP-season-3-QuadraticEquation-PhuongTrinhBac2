<?php
/**
 * Created by PhpStorm.
 * User: HuyBS
 * Date: 24/01/2019
 * Time: 15H30
 */
class QuadraticEquation
{
    public $a;
    public $b;
    public $c;
    public $delta;

    public function setDelta($delta)
    {
        $this->delta = $delta;
    }

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }


    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        return $this->delta = $this->b**2 - 4*$this->a*$this->c;
    }
    public function getRoot1() {
        return $r1 = ((-$this->b + sqrt($this->b**2 - 4*$this->a*$this->c))/(2*$this->a));
    }
    public function getRoot2() {
        return $r2 = ((-$this->b - sqrt($this->b**2 - 4*$this->a*$this->c))/(2*$this->a));
    }
    public function getRoot3()
    {
        return $r3 = -$this->c/$this->b;
    }
}