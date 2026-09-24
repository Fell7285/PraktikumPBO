<?php

class Mobil
{
    // Property dibuat private untuk menerapkan enkapsulasi
    private $merek;
    private $warna;
    private $kecepatan;

    // Constructor
    public function __construct($merek, $warna, $kecepatan)
    {
        $this->setMerek($merek);
        $this->setWarna($warna);
        $this->setKecepatan($kecepatan);
    }

    // Getter merek
    public function getMerek()
    {
        return $this->merek;
    }

    // Setter merek
    public function setMerek($merek)
    {
        $this->merek = $merek;
    }

    // Getter warna
    public function getWarna()
    {
        return $this->warna;
    }

    // Setter warna dengan validasi
    public function setWarna($warna)
    {
        if (empty(trim($warna))) {
            echo "Error: Warna tidak boleh kosong.<br/>";
            return;
        }

        if (strlen(trim($warna)) < 3) {
            echo "Error: Warna minimal 3 karakter.<br/>";
            return;
        }

        $this->warna = $warna;
    }

    // Getter kecepatan
    public function getKecepatan()
    {
        return $this->kecepatan;
    }

    // Setter kecepatan dengan validasi
    public function setKecepatan($kecepatan)
    {
        if ($kecepatan < 0) {
            echo "Error: Kecepatan tidak boleh negatif.<br/>";
            return;
        }

        if ($kecepatan > 200) {
            echo "Error: Kecepatan maksimal 200 km/jam.<br/>";
            return;
        }

        $this->kecepatan = $kecepatan;
    }

    // Method getInfo
    public function getInfo()
    {
        return "Mobil $this->merek berwarna $this->warna, dengan top speed $this->kecepatan km/jam<br/>";
    }

    // Method jalankan
    public function jalankan()
    {
        echo "Mobil $this->merek dijalankan.<br/>";
    }

    // Method berhenti
    public function berhenti()
    {
        echo "Mobil $this->merek dihentikan.<br/>";
    }
}


// Membuat objek mobil
$mobil1 = new Mobil("Toyota", "Hitam", 80);
$mobil2 = new Mobil("Dodge", "Abu-abu", 200);
$mobil3 = new Mobil("Chevrolet", "Merah", 120);


// Menampilkan informasi mobil
echo $mobil1->getInfo();
$mobil1->jalankan();
$mobil1->berhenti();

echo $mobil2->getInfo();
echo $mobil3->getInfo();


// Pengujian setter
echo "<br/>Pengujian perubahan data:<br/>";

$mobil1->setKecepatan(150);
echo "Kecepatan baru mobil 1: "
    . $mobil1->getKecepatan()
    . " km/jam<br/>";

$mobil1->setWarna("Biru");
echo "Warna baru mobil 1: "
    . $mobil1->getWarna()
    . "<br/>";


// Pengujian validasi
echo "<br/>Pengujian validasi:<br/>";

$mobil1->setKecepatan(-10);
$mobil1->setKecepatan(250);

$mobil1->setWarna("");
$mobil1->setWarna("AB");

?>