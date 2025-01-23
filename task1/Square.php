<?php
interface Resizable {
    public function resize($factor);
}
?>

<?php
class Square implements Resizable {
    private $sideLength;

    public function __construct($sideLength) {
        $this->sideLength = $sideLength;
    }

    public function resize($factor) {
        $this->sideLength *= $factor;
    }

    public function __toString() {
        return "Square with side length: " . $this->sideLength;
    }
}
?>


<?php
$square = new Square(4);
echo $square . PHP_EOL;
echo "<br>";

$square->resize(1.5);
echo $square . PHP_EOL;
echo "<br>";

$square->resize(0.5);
echo $square . PHP_EOL;
echo "<br>";
?>

