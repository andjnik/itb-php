<?php

$brojStrana=[500, 200, 330, 400, 120];
$cena=[5000, 3500, 1200, 900, 600];

// prolazak
/* for($i=0; $i < count($brojStrana); $i++)
foreach ($brojStrana as $brS)
$i = 0; while($i < count($brojStrana)) $i++; */

// uzimanje vrednosti
// $brS=$broStrana[0];

function maxProsek($brojStrana, $cena) {
    $max = 0;
    for($i=0; $i < count($brojStrana); $i++) {
        $t = $cena[$i] / $brojStrana[$i];
        if($max < $t) {
            $max=$t;
        }
    }
    return $max;
}

$brojStrana=['knjiga1'=>500, 'knjiga2'=>200, 'knjiga3'=>330, 'knjiga4'=>400, 'knjiga5'=>120];
$cena=['knjiga1'=>5000, 'knjiga2'=>3500, 'knjiga3'=>1200, 'knjiga4'=>900, 'knjiga5'=>600];

function maxProseka($brojStrana, $cena) {
    $max = 0;
    foreach($brojStrana as $k=>$v) {
        $t = $cena[$k] / $v;
        if($max<$t) {
            $max=$t;
        }
    }
    return $max;
}

$nizKnjiga = [
    ['brojStrana'=>500, 'cena'=>5000],
    ['brojStrana'=>200, 'cena'=>3500],
    ['brojStrana'=>330, 'cena'=>1200],
    ['brojStrana'=>400, 'cena'=>900],
    ['brojStrana'=>120, 'cena'=>600],

];

function maxProsekNiza($nizKnjiga) {
    $max = 0;
    for($i=0; $i < count($nizKnjiga); $i++) {
        $t = $nizKnjiga[$i]['cena']/$nizKnjiga[$i]['brojStrana'];
        if($max < $t);
        $max=$t;
    }
    return $max;
}

class Knjiga {
    public $brojStrana;
    public $cena;
}

$k1 = new Knjiga();
$k1->brojStrana = 200;
$k1->cena = 3500;

$k2 = new Knjiga();
$k2->brojStrana = 200;
$k2->cena = 3500;

$k3 = new Knjiga();
$k3->brojStrana = 200;
$k3->cena = 3500;

$k4 = new Knjiga();
$k4->brojStrana = 200;
$k4->cena = 3500;

$knjige = array($k1, $k2, $k3, $k4)












?>