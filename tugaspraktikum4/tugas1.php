<?php

class Produk {
    protected $merek;
    protected $harga;

    public function __construct($merek, $harga) {
        if ($harga <= 0) {
            throw new Exception("Harga harus lebih dari 0");
        }
        $this->merek = $merek;
        $this->harga = $harga;
    }

    public function getInfo() {
        return "Merek: " . $this->merek . "<br/>" .
               "Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br/>";
    }
}

class Makanan extends Produk {
    private $tanggalKadaluarsa;

    public function __construct($merek, $harga, $tanggalKadaluarsa) {
        parent::__construct($merek, $harga);
        $this->tanggalKadaluarsa = $tanggalKadaluarsa;
    }

    public function getInfo() {
        $tanggalHariIni = date("Y-m-d");

        if ($tanggalHariIni <= $this->tanggalKadaluarsa) {
            $status = "Segar";
        } else {
            $status = "Kadaluarsa";
        }
        return "Produk: Makanan - Mie Instan" . "<br/>" .
               "Merek: " . $this->merek . "<br/>" .
               "Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br/>" .
               "Tanggal Kadaluarsa: " . $this->tanggalKadaluarsa . "<br/>" .
               "Status: " . $status . "<br/>";
    }
}

class Elektronik extends Produk {
    private $garansi;

    public function __construct($merek, $harga, $garansi) {
        parent::__construct($merek, $harga);
        $this->garansi = $garansi;
    }

    public function getInfo() {
         return "Produk: Elektronik - Smart TV" . "<br/>" .
               "Merek: " . $this->merek . "<br/>" .
               "Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br/>" .
               "Garansi: " . $this->garansi . " bulan" . "<br/>";
    }
}

try {
    $mie = new Makanan(
        "Indomie",
        3500,
        "2025-06-30"
    );

    $tv = new Elektronik(
        "Samsung",
        5000000,
        12
    );

    echo $mie->getInfo();

    echo "\n\n";

    echo $tv->getInfo();

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>