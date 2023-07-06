<?php

class Pacijent {
    var $ime;
    var $visina;
    var $tezina;

    function stampaj() {
        echo "Ime pacijenta: " . $this->ime . "<br>";
        echo "Visina pacijenta: " . $this->visina . " cm<br>";
        echo "Tezina pacijenta: " . $this->tezina. " kg<br>";
    }

    function bmi() {
        $visina = $this->visina / 100;
        $bmi = $this->tezina / ($visina * $visina);
        return $bmi;
    }

    function kritican() {
        $bmi = $this->bmi();
        if($bmi < 15 || $bmi > 40) {
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
$p1->tezina = 51;
$p1->stampaj();
$bmi1 = $p1->bmi();
echo "BMI pacijenta je: " . $bmi1 . "<br>";
$kriticno1 = $p1->kritican();
echo "Da li je pacijent kritican? " . ($kriticno1 ? "Da" : "Ne") . "<br>";
echo "<hr>";

$p2 = new Pacijent();
$p2->ime = "Filip";
$p2->visina = 170;
$p2->tezina = 65;
$p2->stampaj();
$bmi2 = $p2->bmi();
echo "BMI pacijenta je: " . $bmi2 . "<br>";
echo "<hr>";

$p3 = new Pacijent();
$p3->ime = "Milinka";
$p3->visina = 170;
$p3->tezina = 69;
$p3->stampaj();
$kriticno3 = $p3->kritican();
echo "Da li je pacijent 3 kritican? " . ($kriticno3 ? "Da" : "Ne") . "<br>";




?>