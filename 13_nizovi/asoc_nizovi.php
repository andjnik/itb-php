<?php

    $godine = array(
        "Pera" => 28,
        "Lazar" => 26,
        "Violeta" => 35,
        "Marko" => 35
    );

    //echo $godine["Pera"];
    echo $godine["Violeta"];

    
    $godine = array();
    $godine["Pera"] = 28;
    $godine["Lazar"] = 26;
    $godine["Violeta"] = 35;
    $godine["Marko"] = 35;

    $godine["x"] = 48;

    foreach ($godine as $key => $value) {
        echo "<p>Osoba $key ima $value godina.</p>";
    }

    foreach ($godine as $g) {
        echo "<p>Osoba ima $g godina.</p>";
    }
    


    // foreach petlja moze da se koristi i za indeksne nizove
    $brojevi = array(5, -6, 3.3, 17.8, 0);
    $brojevi[100] = 50;
    $brojevi[2] = 4;

    foreach ($brojevi as $broj) {
        echo "$broj &nbsp;";
    }

    foreach ($brojevi as $indeks => $broj) {
        echo "<p>Element sa indeksom $indeks ima vrednost $broj</p>";
    }

    // Zadatak 1
    $automobili  = array(
        "Audi A3" => 2004,
        "Opel Corsa" => 1998,
        "Opel Astra" => 2016,
        "Peugeot" => 2004,
        "Ford Fokus" => 2015
    );

   
    foreach ($automobili as $marka => $godiste) {
        echo "<p>Automobil $marka proizveden $godiste. godine.</p>";
    }

     // Ispisati automobile koji su stariji od 10 godina.
    $trenutnaGodina = date("Y");
    foreach ($automobili as $marka => $godiste) {
        if ($trenutnaGodina - $godiste > 10) {
            echo "<p>Automobil $marka je stariji od 10 godina.</p>";
        }
    }

    // Ispisati automobile cija Marka sadrzi string "Opel", a proizvedena su posle 2000. godine.
    foreach ($automobili as $marka => $godiste) {
        if (strpos($marka, "Opel") !== false && $godiste >= 2000 ) {
            echo "<p>Automobil $marka je proizveden posle 2000. godine.</p>";
        }
    }

    // Zadatak 2
    // Dat je niz elemenata u obliku ImeOsobe/Visina. Ispisati sve osobe sa njihovim visinama. Ispisati sve osobe koje imaju maksimalnu visinu.

    $imena = array(
        "Andjela" => 156,
        "Milan" => 188,
        "Vasilisa" => 168,
        "Pavle" => 190,
        "Tijana" => 175,
        "Jovan" => 190
    );
    foreach ($imena as $imeOsobe => $visina) {
        echo "<p>$imeOsobe ima sledecu visinu: $visina cm.</p>";
    }
    echo "<hr>";

    // Ispisati sve natprosečno visoke osobe.
    $suma = 0;
    foreach ($imena as $imeOsobe => $visina) {
        $suma += $visina;    
    }
    
    $prosek = $suma / count($imena);
    echo "$prosek";

    foreach ($imena as $visina) {
        if ($visina > $prosek) {
            echo "<p>$imeOsobe ima natprosecnu visinu $visina.</p>";
        }
    }
    echo "<hr>";

    // Ispisati sve osobe koje imaju maksimalnu visinu.
    $maks = 0;
    //$maks = PHP_INT_MIN;
    foreach ($imena as $visina) {
        if ($visina > $maks)
        {
            $maks = $visina;
        }
    }
    foreach ($imena as $imeOsobe => $visina) {
        if ($visina == $maks) {
            echo "<p>Osoba $imeOsobe ima maksimalnu visinu.</p>";
        }
    }
    

    // Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'.
    foreach ($imena as $imeOsobe => $visina) {
        if ($visina < $prosek && $imeOsobe[0] == "V") {

            echo "<p>Osoba $imeOsobe je visoka ispod proseka.</p>";
        }
    }






?>

