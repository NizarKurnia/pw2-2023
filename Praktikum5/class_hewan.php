<?php
class HewanMamalia
{
    public $warna;
    public $namaHewan;
    public $habitat;

    function makan()
    {
        return "Mamalia makan";
    }

    function minum()
    {
        return "Mamalia minum";
    }

    function menyusui()
    {
        return "Mamalia menyusui";
    }
}

$mamalia = new HewanMamalia();
$mamalia->namaHewan = "Manusia";
echo $mamalia->namaHewan;
echo "<br>";
echo $mamalia->warna = "Krem";
echo "<br>";
echo $mamalia->habitat = "Darat";
echo "<br>";
echo $mamalia->makan();
echo "<br>";
echo $mamalia->minum();
echo "<br>";
echo $mamalia->menyusui();
?>