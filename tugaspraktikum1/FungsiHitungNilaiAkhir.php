<?php

function hitungNilaiAkhir(float $uts, float $uas, float $tugas): float {
    $nilaiakhir = ($uts * 0.3) + ($uas * 0.4) + ($tugas * 0.3);
    return $nilaiakhir;
}

$uts = 80;
$uas = 94;
$tugas = 75;

$hasil = hitungNilaiAkhir($uts, $uas, $tugas);
echo "Hasil hitungan akhir = " . $hasil;

?>