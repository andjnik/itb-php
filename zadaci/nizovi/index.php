<?php

// ZADATAK 1
$imena = array("Andjela", "Laki", "Drakce", "Zuzu", "Doni");

print_r($imena);
echo "<hr>";

// ZADATAK 2
$niz = array(5, 15, 20, 55, 9, -6);
$zbir = 0;
for($i = 0; $i < count($niz); $i++){
    $zbir += $niz[$i];
}
echo "<p>Zbir ovog elementa je: $zbir </p>";

// ZADATAK 3
$brElemenata = count($niz);
$arsr = $zbir / $brElemenata;

echo "<p>Aritmeticka sredina je: $arsr </p>";

// ZADATAK 4
$maks = $niz[0];
for($i = 0; $i<count($niz); $i++) {
    $trenutniElement = $niz[$i];
    if($trenutniElement > $maks) {
        $maks = $trenutniElement;
    }
}
echo "<p>Najveci element ovoh niza je: $maks </p>";

?>