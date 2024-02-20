<?php
$hewan = ["kucing", "kuda", "burung", "semut"];
echo $hewan[0]. "<br>";
echo $hewan[2]. "<br>";
echo "<br>";

foreach ($hewan as $key => $value) {
    echo $value . "<br>";
}

$hewan[1] = "kukang";
echo $hewan[1];