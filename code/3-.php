<?php 

$f = scandir("category/f"); 
$s = scandir("category/s"); 
$t = scandir("category/t"); 

echo "F: ";

foreach ($f as $i) {
    if($i > 1)
    echo $i, "<br>";
}

echo "S: ";

foreach ($s as $i) {
    if($i > 1)
    echo $i, "<br>";
}

echo "T: ";

foreach ($t as $i) {
    if($i > 1)
    echo $i, "<br>";
}