<?php

class A
{

}

class B extends A
{
    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getA()
    {
        return $this->a;
    }
    public function setA($newA)
    {
        $this->a = $newA;
    }

    protected $a;
}

class C extends B
{
    public function __construct($a, $b)
    {
        $this->b = $b;
        parent::__construct($a);
    }

    public function getB()
    {
        return $this->b;
    }
    public function setB($newB)
    {
        $this->b = $newB;
    }
    protected $b;
}

$a1 = new A();
$b2 = new B($a1);
$b3 = new B($a1);
$c4 = new C($b3, $a1);
$c5 = new C($c4, $b2);