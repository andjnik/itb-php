<?php 

class Auto {
    // polja
    var $marka;
    var $boja;
    var $imaKrov;

    // motode
    function sviraj() {
        echo "<p>Beep! Beep!</p>";
    }

    function ispis() {
        echo "<p>Automobil marke " . $this->marka . " boje " . $this->boja;
        if ($this->imaKrov) {
            echo " ima krov";
        }
        else {
            echo " nema krov";
        }
        echo "</p>";
    }

}

// Mozemo da kreiramo objekte klase Auto
$a1 = new Auto();
// var_dump($a1);
$a1 -> marka = "Opel";
$a1 -> boja = "plava";
$a1 -> imaKrov = false;
// var_dump($a1);

$a2 = new Auto();
$a2 -> marka = "Peugeot";
$a2 -> boja = "bela";
$a2 -> imaKrov = false;
$a2 -> sediste = 5;
// var_dump($a2);
echo "<br>";

$a3 = new Auto();
$a3 -> marka = "Audi";
$a3 -> boja = "siva";
$a3 -> imaKrov = true;
// echo "<p>Auto marke " . $a3->marka . " boje " . $a3->boja . " ima krov: " . $a3->imaKrov . "</p>";
$a3->ispis();

$a1 -> sviraj();
$a2 -> sviraj();
$a3 -> sviraj();

// echo "<p>Auto marke " . $a2->marka . " boje " . $a2->boja . " ima krov: " . $a2->imaKrov . "</p>";
$a2->ispis();








?>