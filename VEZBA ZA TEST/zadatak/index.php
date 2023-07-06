<?php 

require_once "kredit.php";
require_once "autokredit.php";
require_once "stambenikredit.php";

$autok = new AutoKredit("Kredit broj 1", 10000, 5, 6, 3);
$stambenik = new StambeniKredit("Stambeni kredit 1", 20000, 10, 5);
$autok1 = new AutoKredit("Kredit broj 2", 15000, 5, 6, 3);
$stambenik1 = new StambeniKredit("Stambeni kredit 2", 1500, 6, 22);
$autok2 = new AutoKredit("Kredit broj 3", 5000, 5, 3, 3);
$stambenik2 = new StambeniKredit("Stambeni kredit 3", 25000, 5, 3);


$krediti = [$autok, $stambenik, $autok1, $stambenik1, $autok2, $stambenik2];

foreach($krediti as $kredit) {
    $kredit->ispis();
    echo "<p>Mesecna rata je: " . $kredit->racunanjeMesecnihRata() . "</p>";
}


?>