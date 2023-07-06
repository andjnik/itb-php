<?php
/*
*/
function neparan($broj){
   
    $rez = true;
    if($broj % 2 == 0){
        $rez=false;
    }
  
    return $rez;
}

$a = 10;
if(neparan($a)){
    echo "<p>Broj $a je neparan</p>";
}
else
{
    echo "<p>Broj $a je paran</p>";
}

// ZADATAK 2
/* Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. Zatim napisati funkciju maks4 koja vraća najveći od četiri realna broja.
Pozvati funkcije i testirati njihov rad.
*/

function maks2($a, $b)
{
    if($a > $b){
        return $a;
    }
    else {
        return $b;
    }
}

$broj1 = 15;
$broj2 = 45;
$veci = maks2($broj1, $broj2);
echo "<p>Veci od bojeva $broj1 i $broj2 je: $veci</p>";

function maks4($a, $b, $c, $d){
    /*
    $maksAB = maks2($a, $b);
    $maksCD = maks2($c, $d);
    $maks = maks2($maksAB, $maksCD);

    return $maks;
    */

    return maks2(maks2($a, $b), maks2($c, $d));
}

$b1 = 10;
$b2 = 25;
$b3 = 0;
$b4 = 10;
$r = maks4($b1, $b2, $b3, $b4);
echo "<p>Maksimanlni od brojeva $b1, $b2, $b3, $b4 je: $r</p>";

function kub($a)
{
    return $a*$a*$a;
}

$broj = 10;
$rez = kub($broj);
echo "<p>$rez</p>";

function uvecaj(&$a, $korak=10)
{
    $a = $a + $korak;
}

$broj = 15;
uvecaj($broj);
echo "<p>$broj</p>";

function uvecaj2(&$a, $korak=10)
{
    return $a + $korak;
}

$broj = 15;
$broj = uvecaj2($broj);
echo "<p>$broj</p>";

// ZADATAK 3
/* Napisati funkciju slika kojoj se prosleđuje url adresa slike, a funkcija prikazuje sliku za prosleđenu adresu slike.
Pozvati funkciju i testirati je za različite url adrese. */

function slika($url) {
    echo "<img src='$url'>";
}
slika("data:image/jpeg;base64,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");
// ZADATAK 4
// Napraviti funkciju obojenaRec kojoj se prosleđuje boja na engleskom jeziku i prosleđuje se proizvoljna reč. Prosleđenu reč ispisati u paragarfu bojom koja je prosleđena. Pozvati funkciju i testirati je.


function obojenaRec($boja, $tekst) {
    echo "<p style='color: $boja'>$tekst</p>";
}

obojenaRec('red', "Ovo je tekst crvene boje");
obojenaRec('blue', "Ovo je tekst PLAVE boje");

// ZADATAK 5
// Napraviti funkciju recenica1 koja pet puta ispisuje istu rečenicu u paragrafu, a veličina fonta rečenice treba da bude jednaka vrednosti iteratora (sami odredite startnu vrednost iteratora i za koliki korak ćete iterator povećavati). Testirati funkciju


function recenica1() {
    for($i = 10; $i <= (10+4*5); $i += 5) {
        echo "<p style='font-size:${i}px'>Recenica</p>";
    }
}

recenica1();

// ZADATAK 6
// Napraviti funkciju recenica2 kojoj se prosleđuje veličina fonta a ona u paragrafu ispisuje proizvoljnu rečenicu. Pozvati funkciju pet puta za različite prosleđene vrednosti. Testirati funkciju.

function recenica2($font) {
    echo "<p style='font-size:${font}px'>Ovo je neka recenica.</p>";
}

recenica2(10);
recenica2(25);
recenica2(35);
recenica2(40);
recenica2(50);

// ZADATAK 7
// Napraviti funkciju aritmeticka koja vraća aritmetičku sredinu brojeva od n do m. Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.

function arsr($n, $m) {
    $suma = 0;
    for ($i = $n; $i <= $m; $i++) {
        $suma += $i;
    }
    return $suma / ($m - $n + 1);
    
}
echo arsr (6, 10);
echo "<hr>";

// ZADATAK 8
// Napisati funkciju aritmetickaCifre koja vraća aritmetičku sredinu brojeva kojima je poslednja cifra 3 u intervalu od n do m. Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.

function aritmetickaCifre($n, $m) {
    $zbir = 0;
    $nBroj = 0;
    for($i = $n; $i <= $m; $i++){
        if($i % 10 == 3) {
            $zbir += $i;
            $nBroj++;
        }
    }
    if($nBroj) {
        return $zbir/$nBroj;
    }
    else {
        return "<p>U opsegu nema brojeva koji zadovoljavaju uslov</p>";
    }
}

echo aritmetickaCifre(5, 13);

// ZADATAK 9
/* Dobili ste plaćenu programersku praksu u trajanju od n meseci.
Prvog meseca, plata će biti a dinara.
Ako budete vredno radili, svakog narednog meseca ćete dobiti povišicu od d dinara.
Brojeve n, a i d određujete sami.
Napišite funkciju praksa kojoj se prosleđuju brojevi n i a. Funkcija treba da vrati vrednost koliko ćete ukupno navca zaraditi, ukoliko svakog meseca budete dobijali povišicu.
Testirati zadatak (pozvati funkciju i ispisati vrednost koju ona vraća). */

function praksa ($n, $a, $d) {
    $ukupno = $a;
    for($i = 2; $i <= $n; $i++) {
        $ukupno += $a + $d;
    }
    return $ukupno; // $ukupno = $a + ($n - 1) * ($a + $d);
}

function praksa2 ($n, $a, $d) {
    $ukupno = 0;
    for($i = 1; $i <= $n; $i++) {
        $ukupno += $a + $d;
    }
    return $ukupno - $d; // $ukupno = $n * ($a + $d) - $d;
}

echo "<hr>";
$n = 10;
$a = 1000;
$d = 120;

echo praksa ($n, $a, $d);

// ZADATAK 10
// Napraviti niz celih brojeva. Ispisati sve neparne brojeve ovog niza koristeći funkciju neparan iz 1. zadatka. Pozvati funkciju i testirati je.

$niz = [81, -47, 5, 2, -0, 10, -15];
/*
for($i = 0; $i <= count($niz)-1; $i++){
    if(neparan($niz[$i])) {
        echo "<p>". $niz[$i] ."</p>";
    }
}
*/
foreach($niz as $k => $v) {
    if(neparan($v)) {
        echo "<p>". $v . "</p>";
    }
}


// ZADATAK 11
// Napraviti funkciju brojNeparnih kojoj se kao parametar prosleđuje niz celih brojeva, a funkcija prebrojava i vraća koliko neparnih brojeva ima prosleđeni niz. Pozvati funkciju i testirati je.

function brojNeparnih($arr) {
    $brojNeparnih = 0;
    for($i = 0; $i<count($arr); $i++) {
        if(neparan($arr[$i])) {
            $brojNeparnih++;
        }
    }
    return $brojNeparnih;
}

echo "<p>Broj neparnih u nizu je: ".brojNeparnih($niz)."</p>";

// ZADATAK 12


function najnizaTemp($arr) {
    $minTemp = 100;
    $minDatum = "";
    $minDan = 0;
    $dan = 1;
    foreach($arr as $datum => $temp) {
        if($minTemp>$temp) {
            $minTemp=$temp;
            $minDatum=$datum;
            $minDan=$dan;
        }
        $dan++;
    }
    $dani=['Ponedeljak', 'Utorak', 'Sreda', 'Cetvrtak', 'Petak'];
    echo "<p style='color: blue'>".$dani[$minDan-1]." ".$minDatum." sa temp ".$minTemp."</p>";
}
$niz=[
    '01.05.2023.'=>19,
    '02.05.2023.'=>22,
    '03.05.2023.'=>18,
    '04.05.2023.'=>15,
    '05.05.2023.'=>25
];
najnizaTemp($niz);

?>