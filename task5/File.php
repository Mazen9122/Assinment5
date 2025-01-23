<?php
class File {
    private $name;
    private $size;

    public function __construct($name, $size) {
        $this->name = $name;
        $this->size = $size;
    }

    public function getName() {
        return $this->name;
    }

    public function getSize() {
        return $this->size;
    }

    public static function calculateTotalSize($files) {
        $totalSize = 0;
        foreach ($files as $file) {
            $totalSize += $file->getSize();
        }
        return $totalSize;
    }
}
?>
