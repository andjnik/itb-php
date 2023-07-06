<?php

require_once "osoba.php";

class Zaposleni extends Osoba {
    protected $plata;
    protected $pozicija;

    public function __construct($i, $p, $g, $plata, $poz)
    {
        parent::__construct($i, $p, $g);
        $this->plata = $plata;
        $this->pozicija = $poz;
    }

    public function getPlata() {
        return $this->plata;
    }

    public function getPozicija() {
        return $this->pozicija;
    }

    public function setPlata($plata) {
        $this->plata = $plata;
    }

    public function setPozicija($poz) {
        $this->pozicija = $poz;
    }

    public function ispisiZap() {
        $this->ispis();
        echo "<p>Plata je: " . $this->plata . "pozicija je: " . $this->pozicija . "</p>";

    }
}

$z1 = new Zaposleni("Marko", "Markovic", 1995, 60000, "Komercijalista");
$z2 = new Zaposleni("Jelena", "Petrovic", 1988, 100000, "Lekar");
$z3 = new Zaposleni("Mina", "Stefanovic", 1990, 70000, "Ucitelj");

$zaposleni = array($z1, $z2, $z3);

// Napisati funkciju prosekPlate kojoj se prosleđuje niz zaposlenih, a ona vraća prosečnu platu svih zaposlenih iz niza.
function prosekPlate($zaposleni) {
    $zbir = 0;
    $brojZaposlenih = count($zaposleni);
    foreach($zaposleni as $osoba) {
        $zbir += $osoba->getPlata();
    }
    if($brojZaposlenih > 0) {
        $prosek = $zbir / $brojZaposlenih;
    }
    return $prosek;
}

$prosekPlate = prosekPlate($zaposleni);
echo "<p>Prosecna plata je: $prosekPlate </p>";

// Napisati funkciju natprosecnaPlata kojoj se prosleđuje neki zaposleni, a koja vraća true ukoliko zaposleni ima natprosečno visoku platu, a u suprotnom vraća false.

function natprosecnaPlata($zaposleni, $z1) {
    $prosekPlate = prosekPlate($zaposleni);
    foreach($zaposleni as $osoba) {
    if($osoba->getPlata() > $prosekPlate) {
        return true;
    }
    else {
        return false;
    }
    }
}

$natprosecna = natprosecnaPlata($zaposleni, $z1) ? "IMA" : "NEMA";
echo "<p>Zaposleni ". $natprosecna . " natprosecnu platu.</p>";


?>