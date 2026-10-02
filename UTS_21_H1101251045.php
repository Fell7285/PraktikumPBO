<?php

abstract class PaketHosting
{
    protected $id;
    protected $nama;
    protected $hargaDasar;

    public function __construct($id, $nama, $hargaDasar)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->hargaDasar = $hargaDasar;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getHargaDasar()
    {
        return $this->hargaDasar;
    }

    abstract public function hitungTotal();
    abstract public function getJenis();
    abstract public function cetakDetail();
}

class Shared extends PaketHosting
{
    private $gb;

    public function __construct($id, $nama, $hargaDasar, $gb)
    {
        parent::__construct($id, $nama, $hargaDasar);
        $this->gb = $gb;
    }

    public function hitungTotal()
    {
        return $this->hargaDasar + (10000 * $this->gb);
    }

    public function getJenis()
    {
        return "Shared";
    }

    public function cetakDetail()
    {
        return "[Shared] {$this->nama} - Storage {$this->gb} GB - Total Rp " .
            number_format($this->hitungTotal(), 0, ',', '.');
    }
}

class VPS extends PaketHosting
{
    private $core;

    public function __construct($id, $nama, $hargaDasar, $core)
    {
        parent::__construct($id, $nama, $hargaDasar);
        $this->core = $core;
    }

    public function hitungTotal()
    {
        return $this->hargaDasar + (50000 * $this->core);
    }

    public function getJenis()
    {
        return "VPS";
    }

    public function cetakDetail()
    {
        return "[VPS] {$this->nama} - {$this->core} Core - Total Rp " .
            number_format($this->hitungTotal(), 0, ',', '.');
    }
}

class Dedicated extends PaketHosting
{
    private $ram;
    private $lamaSewa;

    public function __construct($id, $nama, $hargaDasar, $ram, $lamaSewa)
    {
        parent::__construct($id, $nama, $hargaDasar);
        $this->ram = $ram;
        $this->lamaSewa = $lamaSewa;
    }

    public function hitungTotal()
    {
        $total = $this->hargaDasar + (100000 * $this->ram);
        if ($this->lamaSewa > 12) {
            $total -= $total * 0.15;
        }
        return $total;
    }

    public function getJenis()
    {
        return "Dedicated";
    }

    public function cetakDetail()
    {
        $diskon = $this->lamaSewa > 12 ? "diskon 15%" : "tanpa diskon";
        return "[Dedicated] {$this->nama} - RAM {$this->ram} GB - Sewa {$this->lamaSewa} bulan ({$diskon}) - Total Rp " .
            number_format($this->hitungTotal(), 0, ',', '.');
    }
}

$daftarPaket = [
    new Shared("H001", "Felix_Faustine", 50000, 10),
    new VPS("H002", "Indra_Prianto", 150000, 2),
    new Dedicated("H003", "Maulana_Ardi", 500000, 8, 24),
    new Shared("H004", "Budi Santoso", 60000, 5),
    new Dedicated("H005", "Siti Aminah", 450000, 4, 6),
];

$totalKeseluruhan = 0;

echo "DAFTAR PAKET HOSTING<br/><br/>";

foreach ($daftarPaket as $i => $paket) {
    $total = $paket->hitungTotal();
    $totalKeseluruhan += $total;

    echo ($i + 1) . ". " .
         $paket->getId() . " | " .
         $paket->getNama() . " | " .
         $paket->getJenis() . " | Harga Dasar: Rp " .
         number_format($paket->getHargaDasar(), 0, ',', '.') . " | Total: Rp " .
         number_format($total, 0, ',', '.') . "<br/>";
}

echo "Total Keseluruhan: Rp " . number_format($totalKeseluruhan, 0, ',', '.') . "<br/><br/>";

echo "DETAIL PAKET<br/>";
foreach ($daftarPaket as $paket) {
    echo $paket->cetakDetail() . "<br/>";
}