<?php
if (!isset($_POST["hitung"])) {
    header("Location: tugascuy.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                    <?php
                if (isset($_POST['hitung'])) {
                // var_dump($_POST)
                $nama = $_POST['nama'];
                $hargamobil = $_POST['hargamobil'];
                $tenor = $_POST['tenor'];
                $dp = $_POST['dp'];
                $hargadpmobil = 0;

                if ($dp == 10) {
                    $hargadpmobil = ($dp/100) * $hargamobil;
                } elseif ($dp == 20) {
                    $hargadpmobil = ($dp/100) * $hargamobil;
                } elseif ($dp == 30) {
                    $hargadpmobil = ($dp/100) * $hargamobil;
                } elseif ($dp == 40) {
                    $hargadpmobil = ($dp/100) * $hargamobil;
                } elseif ($dp == 50) {
                    $hargadpmobil = ($dp/100) * $hargamobil;
                } elseif ($dp == 60) {
                    $hargadpmobil = ($dp/100) * $hargamobil;
                }

                $lamaangsuran = 0;
                if ($tenor == 1) {
                    $lamaangsuran = $tenor * 12;
                } else if ($tenor == 2) {
                    $lamaangsuran = $tenor * 12;
                } else if ($tenor == 3) {
                    $lamaangsuran = $tenor * 12;
                } else if ($tenor == 4) {
                    $lamaangsuran = $tenor * 12;
                } else if ($tenor == 5) {
                    $lamaangsuran = $tenor * 12;
                }

                $hargaafterdp = $hargamobil-$hargadpmobil;
                $totalbunga = 20/100*$hargamobil;
                $tahap1 = $hargaafterdp+$totalbunga;
                $angsuran = $tahap1/$lamaangsuran;
    if (empty($nama)) {
        echo "Nama wajib diisi <br>";
    }
    else {
        echo "Nama: $nama <br>";
    }
                echo "<br> Harga Mobil = Rp " . $hargamobil;
                echo "<br> Tenor = " . $tenor, " Tahun";
                echo "<br> DP = " . $dp, "%";
                echo "<br> DP = Rp ", $hargadpmobil;
                echo "<br> Bunga = 20%";
                echo "<br> Bunga = Rp ", $totalbunga;
                echo "<br> Lama Angsuran = " . $lamaangsuran . " Bulan";
                echo "<br> Jumlah Angsuran = Rp ".$angsuran."/Bulan";
                }
                ?>
</body>
</html>