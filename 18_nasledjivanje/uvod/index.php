<?php 

    require_once "Automobil.php";
    /*
    OVAKO SMO RADILI
    $v = new Vozilo();
    // $v->boja = "bela";
    // $v->tip = "BMW";
    // echo "<p>$v->boja, $v->tip</p>";
    $v->voziVozilo();
    // $v->voziAutomobil(); - nije dobro: osnovna klasa nema polja i metode iz izvedenih klasa

    $a = new Automobil();
    // $a->boja = "zuta";
    // $a->tip = "Peugeout";
    // echo "<p>$a->boja, $a->tip</p>";
    $a->voziVozilo(); // jeste dobro: izvedena klasa je nasledila polja i metode osnovne klase
    $a->voziAutomobil(); // jeste dobro: izvedena klasa moze da ima svoje specificne polja i metode
    */

    $v = new Vozilo("bela", "BMW");
    $v->voziVozilo();

    $a = new Automobil("zut", "Peugout");
    // $a->boja = "plava";
    $a->voziVozilo();
    $a->voziAutomobil();


?>