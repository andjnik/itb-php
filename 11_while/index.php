<?php
    // WHILE PETLJA
    /* 1. Postaviti pocetnu vrednost - inicijalizacija
    2. while(uslov)
        2.a. TRUE - Blok naredbi koji se odvija ukoliko je uslov u while petlji ispunjen
        2.b. FALSE - Ne izvrsava se blok naredbi unutra while petlje vec se prelazi na kod ispod bloka
    */

    // 1. ZADATAK
    // Ispisati brojeve od 1 do 20:
    // a) Sve u istom redu
    // b) Svaki u novom redu

    $i = 1;
    while($i <= 20) {
        // echo "$i "; // a)
        echo "$i <br>";
        $i++;
    }
    echo "<i>$i</i>";

    // Ekvivalentni izrazi za povecanje za jedan su:
    // $i++;
    // $i += 1;
    // $i = $i + 1;

    //Ekvivalentni izrazi za smanjivanje za jedan su:
    // $i--;
    // $i -= 1;
    // $i = $i - 1'


    // 2. ZADATAK
    $i = 20;
    while($i >= 1) {
        echo "$i ";
        $i--;
    }
    echo "<i>$i</i>";
    // $i ima vredost 0 nakon izvrsenja while petlje


    // 4. ZADATAK

    // 1. nacin
    $n = 5;
    $i = 1;
    while($i <= $n) {
        if($i%3 == 0){
            echo "<p style='color:red;'>Hello $i</p>";
        }
        elseif($i%3 == 1) {
            echo "<p style='color:blue;'>Hello $i</p>";
        }
        else {
            echo "<p style='color:orange;'>Hello $i</p>";
        }
       $i++;
    }
    
    // 2. nacin
    $n = 7;
    $i = 1;
    while($i <= $n) {
        if($i%3 == 0){
            $boja = "purple";   
        }
        elseif($i%3 == 1) {
           $boja = "lime";
        }
        else {
            $boja = "magenta";    
        }
        echo "<p style='color:$boja;'>Hello $i</p>";
       $i++;
    }
    
    // 3. nacin
    $n = 7;
    $i = 1;
    while($i <= $n) {
        $boja = "magenta";
        if($i%3 == 0){
            $boja = "purple";   
        }
        elseif($i%3 == 1) {
           $boja = "lime";
        }
        echo "<p style='color:$boja;'>Hello $i</p>";
       $i++;
    }

    // Zadatak 3
    $i = 2;
    while($i <= 20) {
        echo "$i ";
        $i +=2;
    }
    
    // Zadatak 5
    $n = 5;
    $i = 1;
    while($i <= $n){
        if($i % 2 == 0){
            echo "<img src='download.jpg' style='border: 2px solid lime'>";
        }
        else {
            echo "<img src='download.jpg' style='border: 2px solid red'>";
        }
        $i++;
    }

    // Dodatni zadatak
    //ispisi n paragrafa svaki u random boji
    $n = 15;
    $i = 1;
    while($i <= $n){
        $r = rand(0, 225);
        $g = rand(0, 255);
        $b = rand(0, 225);

        $color = "rgb({$r},{$g},{$b})";
        echo "<p style='color:$color;'> Proba da li se menjaju boje</p";
        $i++;
        echo "<hr>";
    }

    // 6. ZADATAK

    $i = 1;
    $suma = 0;
    while($i <= 100) {
        $suma += $i;
        $i++;
    }
    echo "<p>Suma brojeva od 1 do 100 je: $suma</p>";

    // 7. ZADATAK
    $n = 2000;
    $sum = 0;
    $i = 1;
    while($i <= $n) {
        $sum += $i;
        $i++;
    }
    echo "<p>Suma ovih brojeva od 1 do 2000 je $sum.";

    // 8. ZADATAK
    $n = $i = 50;
    $m = 150;
    $suma = 0;
    while($i <= $m) {
        $suma += $i;
        $i++;
    }
    
    echo "<p>Suma brojeva od  $n do $m je: $suma</p>";

    // 9. ZADATAK
    $p = 1;
    $n = $i = 5;
    $m = 7;
    while($i <= $m) {
        $p *= $i;
        $i++;
    }
    echo "Proizvod brojeva od $n do $m je $p";

    // 10. ZADATAK
    $n = 10;
    $m = 150;
    $suma_parnih = 0;
    $suma_neparnih = 0;
    while($n <= $m) {
        if ($n%2 == 0) {
            $suma_parnih += $n*$n;
        }
        else {
            
        }
    }

    // 11. ZADATAK
    $k = 250;
    $brojd = 0;
    $i = 1;
    while ($i <= $k) {

    }
