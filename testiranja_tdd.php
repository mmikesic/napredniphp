<?php
class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return M_PI * pow($this->radius, 2);
    }

    public function getCircumference() {
        return 2 * M_PI * $this->radius;
    }
}
$circle = new Circle(5);
echo "Radius: " . $circle->getRadius() . "\n";
echo "Area: " . $circle->getArea() . "\n";
echo "Circumference: " . $circle->getCircumference() . "\n";