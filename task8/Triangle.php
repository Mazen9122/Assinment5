<?php
class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }

    public function displayDetails() {
        echo "Triangle Area: " . $this->calculateArea() . "<br>";
    }
}
?>
