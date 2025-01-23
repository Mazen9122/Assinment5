<?php
require_once 'File.php';

$file1 = new File("file1.txt", 10);
$file2 = new File("file2.txt", 20);
$file3 = new File("file3.txt", 30);

$files = [$file1, $file2, $file3];
$totalSize = File::calculateTotalSize($files);

echo "Total size of files: " . $totalSize . " bytes<br>";
?>
