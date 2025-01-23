<?php
class LibraryItem {
    protected $title;
    protected $year;

    public function __construct($title, $year) {
        $this->title = $title;
        $this->year = $year;
    }

    public function displayDetails() {
        echo "Title: " . $this->title . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}
?>
