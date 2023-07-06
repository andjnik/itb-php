<?php


// 1. ZADATAK
// Ispisati brojeve od 1 do 20. 

for($i=1; $i<=20; $i++){
    echo "$i ";
}
echo "<hr>";


///////////////////////////

// 2. ZADATAK
// Ispisati brojeve od 20 do 1.
for($i=20; $i>=1; $i--) {
    echo "$i ";
}
echo "<hr>";

////////////////////////////
// 3. ZADATAK
// Ispisati parne brojeve od 1 do 20.
for($i=2; $i<=20; $i+=2) {
    echo "$i ";
}
echo "<hr>";

////////////////////////////////
// 4. ZADATAK
// Ispisati dvostruku vrednost brojeva od 5 do 15.
for($i=5; $i<=15; $i++) {
    $pom= $i * 2;
    echo " $pom ";
    echo $i*2 . " ";
}
echo "<hr>";

////////////////////////////////
// 5. ZADATAK
// Odrediti sumu brojeva od 1 do 100.
$suma = 0;
for($i=1; $i<=100; $i++) {
    $suma += $i;
}
echo "<p>Suma brojeva od 1 do 100 je: $suma ";
echo "<hr>";

/////////////////////////////////
// 6. ZADATAK
// Odrediti sumu brojeva od 1 do $n. 
$n = 156;
$sum = 0;
for($i=1; $i<=156; $i++){
    $sum += $i;
}
echo "<p>Suma brojeva od 1 do $n je: $sum </p>";

// 7. ZADATAK
    // Odrediti sumu brojeva od $n do $m.
    $sum = 0;
    $n = $i = 5;
    $m = 10;
    for ($i = $n; $i <= $m; $i++)
    {
        $sum += $i;
    }
    echo "Suma brojeva od $n do $m je $sum";
    echo "<hr>";

    ////////////////////////////////

    // 8. Zadatak
    // Odrediti proizvod brojeva od $n do $m.
    $proiz = 1;
    $n = $i = 5;
    $m = 10;
    for ($i = $n; $i <= $m; $i++)
    {
        $sum *= $i;
    }
    echo "Proizvod brojeva od $n do $m je $sum";
    echo "<hr>";

    ////////////////////////////////

    // 9. ZADATAK
    // Odrediti sumu kvadrata brojeva od n do m

    $sum = 0;
    $n = $i = 5;
    $m = 10;
    for ($i = $n; $i <= $m; $i++)
    {
        $sum = ($i * $i) + $sum; // $sum += $i * $i // $sum += $i**2
    }
    echo "Suma kvadrata od $n do $m je $sum";
    echo "<hr>";
    


/////////////////////////////

// 10. ZADATAK
$n = 7;
for($i = 1; $i <= $n; $i++) {
    if($i % 3 == 1) {
        echo "<img src='slike/1.jpg'>";
    }
    elseif($i % 3 == 2) {
        echo "<img src='slike/2.jpg'>";
    }
    else {
        echo "<img src='slike/3.jpg'>";
    }
}

// Da je zadatak glasio da treba n puta da ispisete slike 1.jpg, 2.jpg, 3.jpg
$n = 4;
for($i = 1; $i < $n; $i++) {
    for($j = 1; $j <= 3; $j++) {
        echo "<img src='slike/$j.jpg'>";
    }
    echo "<br>";
}

//////////////////////////////////////////////////////////////
// 11. ZADATAK
// Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30.
$suma = 0;
for($i = 1; $i <= 30; $i++) {
    if($i % 9 == 0) {
    $suma += $i;
    }
}
echo "<p>Suma brojeva od 1 do 30 koji su deljivi sa 9 je: $suma";

////////////////////////////////////////////////////////
// 12. ZADATAK
// Odrediti proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100. *
$proizvod = 1;
for($i = 20; $i <= 100; $i++) {
    if($i % 11 == 0) {
        $proizvod *= $i;
    }
}
echo "<p>Proizvod brojeva deljivih sa 11 u intervalu od 20 do 100 je: $proizvod";

////////////////////////////////////////////////////////////////////////
// 14. ZADATAK
// Ispisati aritmetičku sredinu brojeva od $n do $m.
$n = 5;
$m = 9;
$sum = 0;
$broj = 0;
for($i = 5; $i <= 9; $i++) {
    $sum += $i; // $zbir = $zbir + $i;
    $broj++; // $broj += 1; // $broj = $br +1;
}
echo "<p>Zbir brojeva od $n do $m je $sum, dok je broj brojeva $broj</p>";
$arsr = $sum / $broj;
echo "<p>Aritmeticka sredina je $arsr</p>";

///////////////////////////////////////////////////////////////
// 15. ZADATAK
// Prebrojati koliko brojeva od $n do $m je pozitivno, a koliko njih je negativno. *
$n = -20;
$m = 100;
$pozitivni = 0;
$negativni = 0;
for($i = $n; $i <= $m; $i++) {
    if($i > 0) {
        $pozitivni++;
    }
    elseif($i < 0) {
        $negativni++;
    }
}
echo "<p>Od broja $n do $m, ima pozittivnih brojeva: $pozitivni</p>";
echo "<p>Od broja $n do $m, ima negativnih brojeva: $negativni</p>";

/////////////////////////////////////////////////////////////////
// 16. ZADATAK
// Prebrojati koliko je brojeva od 5 do 50 koji su deljivi sa 3 ili sa 5.
$suma = 0;
for($i = 5; $i <= 50; $i++) {
    if($i % 3 == 0 || $i % 5 == 0) {
        $suma++;
    } 
}
echo "U intervalu od 5 do 50 ima $suma brojeva koji su deljivi sa 3 ili sa 5.";

///////////////////////////////////////////////////////////////////////////////

// 17. ZADATAK
$n = 2;
$m = 25;
$sum = 0;
$brojac = 0;
for($i = $n; $i <= $m; $i++) {
    if($i % 10 == 4) {
        $sum += $i;
        $brojac++;
    }
}
echo "<p>Postoje $sum brojeva deljivih sa 4</p>";

////////////////////////////////////////////////////
// 18. ZADATAK
// Ispisati brojeve od $n do $m, koji su deljivi sa $a.
$n = 14;
$m = 32;
$a = 5;
for($i = $n; $i <= $m; $i++) {
    if($i % $a == 0) {
        echo "$i ";
    }
}

///////////////////////////////////////////
// 21. zadatak
//Odrediti proizvod brojeva od $n do $m koji su deljivi brojem $a, a nisu brojem $b.
$n = 14;
$m = 32;
$a = 5;
$b = 10;
$p = 1;
for($i = $n; $i <= $m; $i++) {
    if($i % $a == 0 && $i % $b != 0) {

        $p *= $i; // $p = $p * $i;
    }
}
echo "<p>$p</p>";

///////////////////////////////////////
