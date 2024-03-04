<?php 

$grade = "A";
$keterangan = ""; 

switch ($grade) {
	case 'A':
		$keterangan = "Sangat Memuaskan";
		break;
	case "B":
		$keterangan = "Memuaskan";
		break;
	case "C":
		$keterangan = "Cukup";
		break;
	case "D":
		$keterangan = "Kurang";
		break;
	case "E":
		$keterangan = "Sangat Kurang";
		break;
	default:
		$keterangan = "Tidak Ada";
		break;
}

echo "<h1>$keterangan</h1>"; 


?>