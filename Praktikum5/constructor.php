<?php

class Kendaraan
{
    public $nama;
    public $warna;
    public $tempatOperasi;

    function __construct($nama, $warna, $tempatOperasi)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->tempatOperasi = $tempatOperasi;
    }
}

$kendaraan = new Kendaraan ("Mobil", "Pink", "Terbang");
echo $kendaraan->nama;
echo "<br>";
echo $kendaraan->warna;
echo "<br>";
echo $kendaraan->tempatOperasi;
?>