<?php

// ZADATAK 1
// Ispisati brojeve od 1 do 20:
// a)Svaki u istom redu
// b) Svaki u novom redu

$i = 1;
while($i <= 20) {
    echo "$i";
    $i++;
}
echo "<hr>";

$i = 1;
while($i <= 20) {
    echo "$i <br/>";
    $i++;
}
echo "<hr>";

// ZADATAK 2
// Ispisati brojeve od 20 do 1. 
$i = 20;
while($i >= 1) {
    echo "<p>$i</p>";
    $i--;
}
echo "<hr>";

// ZADATAK 3
// Ispisati parne brojeve od 1 do 20.
$i = 2;
while($i <= 20) {
    echo "<p>$i</p>";
    $i+= 2;
}
echo "<hr>";

// ZADATAK 4
// Kreirati n paragrafa sa proizvoljnim tekstom i naizmenično ih obojiti u tri različite boje.

$n = 6;
$i = 1;
while($i <= $n) {
    if($i % 3 == 0) {
        echo "<p style='color:red;'>Hello $i</p>";
    }
    elseif($i % 3 == 1) {
        echo "<p style='color:blue;'>Hello $i</p>";
    }
    else {
        echo "<p style='color:purple;'>Hello $i</p>";
    }
    $i++;
}
echo "<hr>";

// ZADATAK 5
// Kreirati n proizvoljnih slika i staviti im naizmenično dva različita okvira.
$n = 4;
$i = 0;
$border1 = "border: 2px solid red";
$border2 = "border: 2px solid blue";
while($i < $n) {
    if($i % 2 == 0) {
        echo "<img src='kamilica.jpg' style='$border1'>";
    }
    else {
        echo "<img src='kamilica.jpg' style='$border2'>";
    }
    $i++;
}





?>