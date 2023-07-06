<?php 
    require_once "zaposleni.php";

    class Osoba {
        protected $ime;
        protected $prezime;
        protected $godinaRodjenja;

        public function __construct($i, $p, $g)
        {
            $this->ime = $i;
            $this->prezime = $p;
            $this->godinaRodjenja = $g;
            
        }

        public function getIme() {
            return $this->ime;
        }

        public function getPrezime() {
            return $this->prezime;
        }

        public function getGodinaRodjenja() {
            return $this->godinaRodjenja;
        }

        public function setIme($i) {
            $this->ime = $i;
        }

        public function setPrezime($p) {
            $this->prezime = $p;
        }

        public function setGodinaRodjenja($g) {
            $this->godinaRodjenja = $g;
        }

        public function ispis() {
            echo "<p>Ime osobe: " . $this->ime . " prezime " . $this->prezime . " godina rodjenja je: " . $this->godinaRodjenja . "</p>";
        }
    }

    $o1 = new Osoba("Andjela", "Nikolic", 1995);
    $o1->ispis();



?>