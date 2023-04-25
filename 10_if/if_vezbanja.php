<?php

// Zadatak 1
$a = 19.35;
$b = -3.14;

if ($a > $b)
{
    echo "<p>Veci je broj $a</p>";
}
else 
{
    echo "<p>Veci je broj $b</p>";
}

// Alternativno:
echo "<p>Veci je broj " . (($a > $b) ? $a : $b) . "</p>";

// Zadatak 4
$dobaDana = date("a");
if ($dobaDana == "am")
{
    echo "<p>Pre podne</p>";
}
else
{
    echo "<p>Posle podne</p>";
}

// Alternativno
if ($dobaDana == "pm")
{
    echo "<p>Posle podne</p>";
}
else
{
    echo "<p>Pre podne</p>";
}

// Zadatak 3
$pol = "M";
if ($pol == "M")
{
    echo "<p> <img src='slicice/m.png' alt='muski pol'> </p>";
}
else
{
    echo "<p> <img src='slicice/f.png' alt='zenski pol'> </p>";
}

// Zadatak 2
$t = 5;

if ($t < 0)
{
    echo "<p>Temperatura je u minusu.</p>";    
}
else
{
    echo "<p>Temperatura je u plusu.</p>";
}

// Zadatak 5
$sadasnja_godina = date("Y");
$godina_rodjenja = 1995;
$raz = $sadasnja_godina - $godina_rodjenja;

if ($raz >= 18)
{
    echo "<p>Osoba je punoletna.</p>";
}
else
{
    echo "<p>Osoba je maloletna.</p>";
}

// Zadatak 6
$a = 9;
$b = -6;
$c = 6;

if ($a > $b)
{
    $pom = $a;
    $a = $b;
    $b = $pom;
}
// Nakon ovog if-a u $a je sigurno manja vrednost nego u $b

if ($a > $c)
{
    $pom = $a;
    $a = $c;
    $c = $pom;
}
// Nakon ovog if-a u $a je sigurno najmanja vrednost od zadate tri

if ($b > $c)
{
    $pom = $b;
    $b = $c;
    $c = $pom;
}
// Nakon ovog if-a vazi $a <= $b <= $c

echo "<p>$a <= $b <= $c</p>";
?>
