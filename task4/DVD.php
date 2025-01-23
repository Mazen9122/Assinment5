<?php
class DVD extends LibraryItem {
    private $director;
    private $duration;

    public function __construct($title, $year, $director, $duration) {
        parent::__construct($title, $year);
        $this->director = $director;
        $this->duration = $duration;
    }

    public function displayDetails() {
        parent::displayDetails();
        echo "Director: " . $this->director . " <br>";
        echo "Duration: " . $this->duration . " Min <br>";
    }
}
?>
