<?php
class Book extends LibraryItem {
    private $author;
    private $pages;

    public function __construct($title, $year, $author, $pages) {
        parent::__construct($title, $year);
        $this->author = $author;
        $this->pages = $pages;
    }

    public function displayDetails() {
        parent::displayDetails();
        echo "Author: " . $this->author . "<br>";
        echo "Pages: " . $this->pages . "<br><br>";
    }
}
?>
