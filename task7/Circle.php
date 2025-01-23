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

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    public function calculateCircumference() {
        return 2 * pi() * $this->radius;
    }

    public function displayDetails() {
        echo "Circle Details:<br><br>";
        echo "Radius: " . $this->radius . "<br>";
        echo "Area: " . $this->calculateArea() . "<br>";
        echo "Circumference: " . $this->calculateCircumference() . "<br>";
    }
}
?>
