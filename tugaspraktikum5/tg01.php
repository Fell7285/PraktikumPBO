<?php

interface Bentuk {
    public function hitungLuas(): float;
}

class Persegi implements Bentuk {
    public function __construct(private float $sisi) {}

    public function getSisi(): float {
        return $this->sisi;
    }

    public function hitungLuas(): float {
        return $this->sisi * $this->sisi;
    }
}

class Lingkaran implements Bentuk {
    private const PI = 3.14;

    public function __construct(private float $radius) {}

    public function getRadius(): float {
        return $this->radius;
    }

    public function hitungLuas(): float {
        return round(self::PI * $this->radius * $this->radius, 2);
    }
}

$bentukList = [
    new Persegi(5),
    new Lingkaran(7),
];

foreach ($bentukList as $bentuk) {
    if ($bentuk instanceof Persegi) {
        printf("Luas Persegi (sisi=%s): %s . <br/>", $bentuk->getSisi(), $bentuk->hitungLuas());
    } elseif ($bentuk instanceof Lingkaran) {
        printf("Luas Lingkaran (radius=%s): %s . <br/>", $bentuk->getRadius(), $bentuk->hitungLuas());
    }
}