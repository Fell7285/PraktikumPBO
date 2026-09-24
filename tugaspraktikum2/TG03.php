<?php

class Mobil {
    public $merek;
    public $warna;
    public $kecepatan;

    public function __construct($merek, $warna, $kecepatan) {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->kecepatan = $kecepatan;
    }

    public function getInfo() {
        return "Mobil $this->merek Berwarna $this->warna, Dengan Top Speed $this->kecepatan" . "<br/>";
    }

    public function jalankan() {
        echo "mobil $this->merek dijalankan." . "<br/>";
    }

    public function berhenti() {
        echo "mobil $this->merek dihentikan." . "<br/>";
    }
}

$mobil1 = new Mobil("toyota", "hitam", "80kmph");
$mobil2 = new Mobil("dodge", "abu abu", "240kmph");
$mobil3 = new Mobil("chevrolet", "merah", "120kmph");

echo $mobil1->getInfo();
$mobil1->jalankan();
$mobil1->berhenti();

echo $mobil2->getInfo();
echo $mobil3->getInfo();

?>