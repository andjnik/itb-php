<?php
    $broj = 150;
    if ($broj <= 10)
    {
        echo "<p>Broj prve desetice</p>";
    }
    elseif ($broj <= 20)
    {
        echo "<p>Broj druge desetice</p>";
    }
    else
    {
        echo "<p>Broj veci od 20</p>";
    }

    // Alternativno:
    if ($broj > 20)
    {
        echo "<p>Broj veci od 20</p>";
    }
    elseif ($broj > 10)
    {
        echo "<p>Broj druge desetice</p>";
    }
    else{
        echo "<p>Broj prve desetice</p>";
    }

    
    // Zadatak 7
    $poeni = 73;
    if ($poeni <= 50)
    {
        echo "<p>Student je pao ispit</p>";
    }
    elseif ($poeni <= 60)
    {
        echo "<p>Ocena 6</p>";
    }
    elseif ($poeni <= 70)
    {
        echo "<p>Ocena 7</p>";
    }
    elseif ($poeni <= 80)
    {
        echo "<p>Ocena 8</p>";
    }
    elseif ($poeni <= 90)
    {
        echo "<p>Ocena 9</p>";
    }
    else
    {
        echo "<p>Ocena 10</p>";
    }

    // Zadatak 8

    $dan = date("w");

    if ($dan == 0){
        echo "<p>Vikend je!";
    }
    elseif ($dan == 6){
        echo "<p>Vikend je!";
    }
    else {
        echo "<p>Radni dan je.";
    }

    // Zadatak 9
    date_default_timezone_set('Europe/Belgrade');
    $sati = date("H");
    if ($sati < 12){
        echo "<p>Dobro jutro";
    }
    elseif ($sati < 18){
        echo "<p>Dobar dan.";
    }
    else {
        echo "<p>Dobro vece";
    }

    // Zadatak 11

    if ($sati < 9){
        echo "<p>Firma ne radi";
    }
    elseif ($sati <= 17){
        echo "<p>Firma je zatvorena";
    }
    /*
    // Zadatak 10
    // Prvi datum
    $d1 = 21;
    $m1 = 4;
    $g1 = 2023;

    // Drugi datum
    $d2 = 18;
    $m2 = 7;
    $g2 = 1980;

    if ($g1 < $g2)
    {
        echo "<p>Raniji datum je $d1.$m1.$g1.</p>";
    }
    elseif ($g2 < $g1)
    {
        echo "<p>Raniji datum je  $d2.$m2.$g2.</p>";
    }
    elseif ($m1 < $m2){
        echo "<p>Raniji datum je $d";
    }
    */

    // Zadatak 12
    // Prvi lekar
    $p1 = 9;
    $k1 = 17;

    // Drugi lekar
    $p1 = 11;
    $p2 = 18;

    if ($k1 < $p2)
    {
        echo "<p>Ne preklapaju se</p>";
    }
    elseif ($k2 < $p1)
    {
        
        echo "<p>Ne preklapaju se</p>";
    }
    else {
        
        echo "<p>Preklapaju se</p>";
    }

    // Zadatak 13
    $n = 13;
    if ($n % 2 == 0)
    {
        echo "<p>$n je paran</p>";
    }
    else {

        echo "<p>$n je neparan</p>";
    }

    // Zadatak 15
    $x = 4;
    $y = 10;
    

    // Zadatak 16
    $broj = 9;
    if ($broj >= 0)
    {
        echo "<p>Broj je veci od 0, prikazi njegov sledbenik " . ($broj + 1);
    }
   else {
    echo "<p>Broj je manji od 0, prikazi njegov sledbenik " . ($broj - 1);
   }
?>