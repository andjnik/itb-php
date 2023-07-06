<?php

class Film {
    var $naslov; // polje
    var $reziser;
    var $godinaIzdanja;

    function stampaj() {
        echo "
            <table>
                <tr>
                    <td>Naslov filma: </td>
                    <td>$this->naslov</td>
                </tr>
                <tr>
                    <td>Ime rezisera:: </td>
                    <td>$this->reziser</td>
                </tr>
                <tr>
                    <td>Godina izdanja: </td>
                    <td>$this->godinaIzdanja</td>
                </tr>
            </table>
        "; //metod
    }
}

// objekti
$f1 = new Film();
$f1->naslov = "Titanik";
$f1->reziser = "Cameron";
$f1->godinaIzdanja = "1997";
$f1->stampaj();

$f2 = new Film();
$f2->naslov = "Toma";
$f2->reziser = "Dragan Bjelogrlic";
$f2->godinaIzdanja = "2022";
$f2->stampaj();

$f3 = new Film();
$f3->naslov = "21 jump street";
$f3->reziser = "Phill Lord";
$f3->godinaIzdanja = "2012";
$f3->stampaj();









?>