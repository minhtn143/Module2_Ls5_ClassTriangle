<?php
include_once "Shape.php";

class Triangle extends Shape
{
    protected $side1;
    protected $side2;
    protected $side3;
    protected $color;

    public function __construct($name, $side1 = 1.0, $side2 = 1.0, $side3 = 1.0,$color="black")
    {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
        $this->side3 = $side3;
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @return float
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @return float
     */
    public function getSide3()
    {
        return $this->side3;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param float $side1
     */
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    /**
     * @param float $side2
     */
    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    /**
     * @param float $side3
     */
    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getArea()
    {
        //heron
        $p = $this->getPerimeter() / 2;
        $p_a = $p - $this->side1;
        $p_b = $p - $this->side2;
        $p_c = $p - $this->side3;
        return sqrt($p * $p_a * $p_b * $p_c);
    }

    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function toString()
    {
     return $this->getSide1().' '.$this->getSide2().' '.$this->getSide3().' '.$this->getColor();
    }


}