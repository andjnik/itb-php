<?php

require_once "knjiga.php";
require_once "zbirka_zadataka.php";
require_once "udzbenik.php";

$udzbenik1 = new Udzbenik("Rimsko pravo", 800, 2000, 1000);
$zbirkaZadataka1 = new ZbirkaZadataka("Praktikum za rimsko pravo", 500, 1500, 500);

$knjige = [$udzbenik1, $zbirkaZadataka1];

foreach ($knjige as $knjiga) {
    $knjiga->stampa();
    $jedinicnaCena = $knjiga->jedinicnaCena();
    echo "Jedinicna cena je: " . $jedinicnaCena. "<br>";
}

?>