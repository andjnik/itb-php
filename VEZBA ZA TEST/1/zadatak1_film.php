<?php

class Film {
    var $naslov;
    var $reziser;
    var $godinaIzdanja;

    function stampaj() {
        echo "<p>Naslov filma: $this->naslov</p>";
        echo "<p>Reziser filma: $this->reziser</p>";
        echo "<p>Godina izdanja filma: $this->godinaIzdanja</p>";
        echo "<hr>";
    }
}

/*
$f1 = new Film();
$f1->naslov = "Titanik";
$f1->reziser = "Cameron";
$f1->godinaIzdanja = 1997;
$f1->stampaj();

$f2= new Film();
$f2->naslov = "Traalalal";
$f2->reziser = "Blabla";
$f2->godinaIzdanja = 2003;
$f2->stampaj();

$f3 = new Film();
$f3->naslov = "Treci film";
$f3->reziser = "Reziser 3";
$f3->godinaIzdanja = 2023;
$f3->stampaj();
*/






?>