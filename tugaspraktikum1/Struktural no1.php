<?php
//Perhitungan Struktural
function RumusPP($panjang, $lebar) {
    $Luas = $panjang * $lebar;
    return $Luas;
}

$p = 10;
$l = 5;

$hasil = RumusPP($p, $l);
echo "Luas persegi panjang = " . $hasil;

?>