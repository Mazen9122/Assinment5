<?php
require_once 'Shape.php';
require_once 'Triangle.php';
require_once 'Rectangle.php';

$triangle = new Triangle(5,8);
$rectangle = new Rectangle(7, 11);

$triangle->displayDetails();
$rectangle->displayDetails();
?>
