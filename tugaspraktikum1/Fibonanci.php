<?php
//Fungsi Deret Fibonacci
$a = 0;
echo "deret angka ke-1 = " . $a . "\n";
$b = 1;
echo "deret angka ke-2 = " . $b . "\n";

for ($i = 0; $i < 8; $i++) {
    $hasil = $a + $b;
    echo "deret angka ke-" . $i + 3 . " = " . $hasil . "\n";

    $a = $b;
    $b = $hasil;
}

?>


