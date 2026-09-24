<?php

class Product {
    public $nama;
    public $harga;
    public $kategori;

    public function __construct($nama, $harga, $kategori) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->kategori = $kategori;
    }
    
    public function getInfo() {
        return "produk $this->nama dengan harga $this->harga, kategori: $this->kategori" . "<br/>";
    }

    public function applyDiskon($persen) {
        $diskon = $this->harga - ($this->harga * $persen / 100);
        return $diskon;
}
}

$produk1 = new Product("ultramilk", 18000, "Minuman ringan");

echo $produk1->getInfo(); 
$hargaSetelahDiskon = $produk1->applyDiskon(10); // Applies 10% discount
echo "Harga setelah diskon (10%): " . $hargaSetelahDiskon . "<br/>";

$produk2 = new Product("indomie", 3500, "Makanan Instant");

echo $produk2->getInfo(); 
$hargaSetelahDiskon = $produk2->applyDiskon(5); // Applies 10% discount
echo "Harga setelah diskon (5%): " . $hargaSetelahDiskon . "<br/>";

?>