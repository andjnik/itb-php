<?php
require_once "Film.php";
require_once "NemiFilm.php";

class Film {
    private $naslov;
    private $reziser;
    private $godinaIzdanja;
    private $ocene;

    public function __construct($n, $g, $r, $o)
    {
        $this->setNaslov($n);
        $this->setReziser($r);
        $this->setGodinaIzdanja($g);
        $this->setOcene($o);
    }

    public function setNaslov($n) {
        $this->naslov = $n;
    }

    public function getNaslov() {
        return $this->naslov;
    }

    public function setReziser($r) {
        $this->reziser = $r;
    }

    public function getReziser() {
        return $this->reziser;
    }

    public function setGodinaIzdanja($g) {
        $this->godinaIzdanja = $g;
    }

    public function getGodinaIzdanja() {
        return $this->godinaIzdanja;
    }

    public function setOcene($o) {
        $this->ocene = $o;
    }

    public function getOcene() {
        return $this->ocene;
    }

    public function stampaj() {
        echo "<p>Film $this->naslov, reziser: $this->reziser, godina: $this->godinaIzdanja, ocene: " . implode(", ", $this->ocene) . " prosecna ocena: " . $this->prosek() . ".</p>";
    }

    public function prosek() {
        $suma = 0;
        foreach($this->ocene as $o) {
            $suma += $o;
        }
        $n = count($this->ocene);
        return ($n > 0) ? ($suma / $n) : 0;
    }
}





?>