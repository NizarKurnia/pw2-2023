<?php
$nilai = 90;

$keterangan = "";

if($nilai > 90){
    $keterangan = "Perfect";
}elseif($nilai > 70 || $nilai <= 90){
    $keterangan = "Sangat baik";
}else {
    $keterangan = "HOOH";
}

echo $keterangan;