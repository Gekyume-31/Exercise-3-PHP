<?php

$filename = 'test.txt';

if (file_exists($filename)) {
   
    $contents = file_get_contents($filename);
    echo "contents of file:\n" . $contents . "\n";
} else {
    echo "The file your looking for doesn't exists\n";
   
    $initialContent = "Hello i'm Kyle \n this is Group 2 \nThis is a sample file.";
    file_put_contents($filename, $initialContent);
    echo "First material was written and the file was produced..\n";
}

$newContent = "\nentering a new line in the file.";
file_put_contents($filename, $newContent, FILE_APPEND);

$fileArray = file($filename);
echo "contents of the file as an array:\n";
print_r($fileArray);
?>
