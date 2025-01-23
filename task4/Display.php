<?php
require_once 'LibraryItem.php';
require_once 'Book.php';
require_once 'DVD.php';

$book = new Book("Introduction to Algorithms", 2015, "Thomas H. Cormen", 218);
$dvd = new DVD("Think Like a Programmer ", 2010, " V. Anton Spraul", 160);

echo "<br>Book Details:<br><br>";
$book->displayDetails();

echo "<br>DVD Details:<br><br>";
$dvd->displayDetails();
?>
