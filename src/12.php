<?php
// this code will allow you to write and read from a file with php.
$myfilename = "mySchoolProject";
$fh = fopen($myfilename, 'w') or die("can't open file");
$stringData = "Hello World!";
fwrite($fh, $stringData);
echo "Saved " . $stringData;
fclose($fh);
?>