<?php
// Buat array asosiatif nilai
$nilai1 = ["id" => 1, "nama" => "Dini", "nim" => "011025", "uts" => 100, "uas" => 100, "tugas" => 100];
$nilai2 = ["id" => 2, "nama" => "Dono", "nim" => "011024", "uts" => 90, "uas" => 90, "tugas" => 90];
$nilai3 = ["id" => 3, "nama" => "Dunu", "nim" => "011023", "uts" => 80, "uas" => 80, "tugas" => 80];
$nilai4 = ["id" => 4, "nama" => "Dene", "nim" => "011022", "uts" => 70, "uas" => 70, "tugas" => 70];
$nilai5 = ["id" => 5, "nama" => "Dana", "nim" => "011021", "uts" => 60, "uas" => 60, "tugas" => 60];

// Buat array multidimensi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4, $nilai5];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Nilai Siswa</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Daftar Nilai Siswa</h1>
        <table class="table table-striped border border-success">
            <thead class="table-danger">
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">UTS</th>
                    <th scope="col">UAS</th>
                    <th scope="col">Tugas</th>
                    <th scope="col">Nilai Akhir</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                    foreach ($kumpulan_nilai as $nilai): ?>

                    <tr>
                        <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                        <td><?= $nilai["id"]?></td>
                        <td><?= $nilai["nama"]?></td>
                        <td><?= $nilai["nim"]?></td>
                        <td><?= $nilai["uts"]?></td>
                        <td><?= $nilai["uas"]?></td>
                        <td><?= $nilai["tugas"]?></td>
                        <td><?= number_format($nilai_akhir, 2, ",", ".")  ?></td>
                        
                    </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>