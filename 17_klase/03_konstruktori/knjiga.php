<?php

class Knjiga {
    private $naslov;
    private $autor;
    private $godIzdanja;
    private $brojStrana;
    private $cena;

    // konstruk.

    public function __construct($naslov, $autor, $godIzdanja, $brojStrana, $cena)
    {
        $this->naslov = $naslov;
        $this->autor = $autor;
        $this->godIzdanja = $godIzdanja;
        $this->brojStrana = $brojStrana;
        $this->cena = $cena;
    }

    // geteri
    public function getNalov() {
        return $this->naslov;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getGodIzdanja() {
        return $this->godIzdanja;
    }

    public function getBrojStrana() {
        return $this->brojStrana;
    }

    public function getCena() {
        return $this->cena;
    }

    // metod

    public function stampajPodatke() {
        echo "<p>Knjiga: " . $this->naslov . ", od autora: " . $this->autor . ", godina izdanja: " . $this->godIzdanja . ", sadrzi broj strana: " . $this->brojStrana . ", cena ove knjige je: " . $this->cena. " din.</p>";
    }

    public function obimna() {
        if($this->brojStrana > 600) {
            return true;
        }
        else {
            return false;
        }
    }

    public function skupa() {
        if($this->cena > 8000) {
            return true;
        }
        else {
            return false;
        }
    }

    public function dugackoIme() {
       if(strlen($this->autor > 18)) {
        return true;
       }
       else {
        return false;
       }
    }
}

$knjiga1 = new Knjiga("Twilight", "Stefani Majer", 2013, 500, 3500);
$knjiga2 = new Knjiga("Knjiga broj 2", "Autor broj 2", 2023, 300, 9000);
$knjiga3 = new Knjiga("Naslov knjige broj 3", "Ime i prezime autora 3", 2000, 700, 2500);

$knjiga1->stampajPodatke();

if($knjiga1->obimna() == true) {
    echo "Knjiga je obimna";
} else {
    echo "Knjiga nije obimna";
}
echo "<hr>";

if($knjiga1->skupa() == true) {
    echo "Ova knjiga je skupa";
} else {
    echo "Ova knjiga je jeftina";
}
echo "<hr>";

if($knjiga1->dugackoime() == true) {
    echo "Ime i prezime autora je dugacko";
} else {
    echo "Ime i prezime ovog autora nije dugacko";
}





?>