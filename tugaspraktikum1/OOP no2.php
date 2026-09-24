<?php
//Perhitungan OOP
class PerhitunganOOP {
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function RumusPP() {
        $Luas = $this->panjang * $this->lebar;
        return $Luas;
    }
}

$hitung = new PerhitunganOOP(10, 5);
$Luas = $hitung->RumusPP();
echo "Luas persegi panjang = " . $Luas;

?>