<?php
 
function tambah ($nilai1, $nilai2){
    echo $nilai1 + $nilai2;
}

tambah (5,6);
echo "<br>";

function hitungUmur($tahunLahir, $tahunSekarang)
{
    echo $tahunSekarang - $tahunLahir;
}

hitungUmur(2004, 2045);