<?php  

class Pacijent {
    var $ime;
    var $visina;
    var $tezina;

    function stampaj() {
        echo "Ime pacijenta: " . $this->ime . "<br>";
        echo "Visina pacijenta je: " . $this->visina . "<br>";
        echo "Tezina pacijenta je: " . $this->tezina . "<br>";

    }

    function bmi() {
        $bmi = $this->tezina / ($this->visina / 100) ** 2;
        return $bmi;
    
    }


    function kritican() {
        if($this->bmi() < 15 || $this->bmi() > 40 ) {
            return true;
        }
        else {
            return false;
        }
    }
}

$p1 = new Pacijent();
$p1->ime = "Andjela";
$p1->visina = 156;
$p1->tezina = 48;
$p1->stampaj();
echo $p1->bmi() . "<br>";
echo "Kritican: {$p1->Kritican()}<br>";


$p2 = new Pacijent();
$p2->ime = "Filip";
$p2->visina = 170;
$p2->tezina = 85;
$p2->stampaj();
echo $p2->bmi() . "<br>";
echo $p2->kritican() . "<br>";

$p3 = new Pacijent();
$p3->ime = "Mina";
$p3->visina = 175;
$p3->tezina = 70;
$p3->stampaj();
echo $p3->bmi() . "<br>";
echo $p3->kritican() . "<br>";




?>