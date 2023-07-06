<?php

require_once "krug.php";

/*
$a = new Krug(10); // $a->r = 10
echo $a->obimKruga() . "<br>"; // 2 * $a->r * 3.14
echo $a->povrsinaKruga() . "<br>"; // $a->r * $a->r * 3.14
// $a->pi = 3.14159; // ovako postavimo ako je public
$a->setPi(3.14159);


$b = new Krug(4);
echo $b->obimKruga() . "<br>";
echo $b->povrsinaKruga() . "<br>";


echo Krug::PI . "<br>";

$c = new Krug(2);
echo $a->obimKruga() . "<br>"; // 2 * $a->r * 3.14
echo $a->povrsinaKruga() . "<br>"; // $a->r * $a->r * 3.14
$a->setPi */



$d = new Krug(2.7);
echo $d->obimKruga() . "<br>";
echo $d->povrsinaKruga() . "<br>";
Krug::setBrojDecimala(4);
echo $d->obimKruga() . "<br>";
echo $d->povrsinaKruga() . "<br>";
echo "<p>Broj krugova do sada je: " . Krug::getBrojKrugova() .  "</p>";

$f = new Krug(7);
echo "<p>Broj krugova do sada je: " . Krug::getBrojKrugova() .  "</p>";



?>