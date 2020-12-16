<?php

$fp = fopen("https://www.cnn.com/specials/health/fitness-excercise", "rb");
if (FALSE === $fp) {
    exit("Failed to open stream to URL");
}

$result = '';

while (!feof($fp)) {
    $result .= fread($fp, 8192);
}
fclose($fp);
echo $result; 
?>