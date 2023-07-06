<?php
function mojaFunkcija(){
    echo "<p>Moja prva funkcija</p>";
}

mojaFunkcija();
mojaFunkcija();
mojaFunkcija();
mojaFunkcija();
mojaFunkcija();

function mojaFunkcija2($tekst) {
    $b = "nova promenljiva";
    echo "<p>F-ja sa parametrom: $tekst i $b i $c</p>";
}

mojaFunkcija("1. nacin");
$a = "2.nacin";
$c = "globalni";
mojaFunkcija2($a);
// echo $b; - ovo ne moze
$b = "van f-je";
mojaFunkcija2($a);

echo $b;

function ispisImena ($ime, $prezime) {
    echo "<p>Ime i prezime je: $ime $prezime</p>";
}

ispisImena("Petar", "Petrovic");
$i = "Lazar";
$p = "Lazic";
ispisImena($i, $p);

function ispisImena2($ime, $prezime=null) {
    echo "<p>Ime je: $ime</p>";
    if($prezime) {
        echo " a prezime je $prezime";
    }
    echo "<//p>";
}

ispisImena2("Mika", null, 25);
ispisImena2("Mika", "Mikic", 25);


function zbir (int $a, int $b) {
    $c = $a + $b;
    // echo "<p>$c</p>";
    return $c;
}
$pom = zbir(3, 8);
echo "<p>$pom</p>";
echo zbir(3, "10");
echo "<hr>";

echo zbir(zbir(3, 5), 10);


$a = zbir(4, 9);
$b = zbir(5, 10);
$c = zbir($a, $b);
echo "<hr>";
echo $c;

echo "<hr>";
echo zbir(zbir(4, 9), zbir(5, 10));
/*
include();
require();
*/

?>