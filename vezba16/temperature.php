<?php

$dan = array(
    "Datum" => "2023/05/16",
    "Kisa" => true,
    "Sunce" => false,
    "Oblacno" => true,
    "Temperature" => array(5, 8, 13, 17, 12, 9, 6)
);

// 15. Napisati funkciju koja određuje i vraća prosečnu temperaturu izmerenu tog dana.
function prosecnaTemp($dan) {
    //$temperature = $dan["Temperature"];
    $suma = 0;
    foreach ($dan["Temperature"] as $temp){
        $suma += $temp;
    }
    $prosek = $suma / count($dan["Temperature"]);
    return $prosek;
}
echo "Prosecna temperatura za dan " . $dan["Datum"] . " je: " . prosecnaTemp($dan);
echo "<hr>";

// 16. Napisati funkciju koja prebrojava i vraća koliko merenja je bilo sa natprosečnom temperaturom.
function brojNatprosecnoMerenje($dan) {
    $prosecnaTemperatura = prosecnaTemp($dan);
    $broj = 0;
    $temperature = $dan["Temperature"];
    foreach ($temperature as $temp) {
        if($temp > $prosecnaTemperatura) {
            $broj++;
        }
    }
    return $broj;
}

echo "Broj merenja sa natprosecnom temperaturom za dan " . $dan["Datum"] . " jednak je: " . brojNatprosecnoMerenje($dan);
echo "<hr>";

// 17. Napisati funkciju koja prebrojava i vraća koliko merenja je bilo sa maksimalnom temperaturom.
function brojNatprosecnoMerenja($dan) {
    $prosecnaTemperatura = prosecnaTemp($dan);
    $temperature = $dan["Temperature"];
    $brojMerenja = 0;
    foreach ($temperature as $temp) {
        if ($temp > $prosecnaTemperatura) {
            $brojMerenja++;
        }
    }
    return $brojMerenja;
}
echo "Broj natprosečnih merenja: " . brojNatprosecnoMerenja($dan) . "<br>";

// 18. Napisati funkciju koja prima tri parametra, dan i dva broja koji predstavljaju dve temperature.
// Potrebno je da metoda vrati broj merenja u toku dana čija je vrednost između ove dve zadate temperature (ne uključujući te dve vrednosti).

function brojMerenjaIzmedju($dan, $min, $max) {
    $temperature = $dan["Temperature"];
    $broj = 0;
    foreach ($temperature as $temp) {
        if ($temp > $min && $temp < $max) {
            $broj++;
        }
    }
    return $broj;
}

$v1 = 7;
$v2 = 15;
echo "Broj merenja na dan " . $dan["Datum"] . " izmedju vrednosti $v1 i $v2 jednak je: " . brojMerenjaIzmedju($dan, $v1, $v2);
echo "<hr>";

// 20. Za dan se smatra da je leden ukoliko nijedna temperatura izmerena tog dana nije iznosila iznad 0 stepeni. Napisati funkciju leden($dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio leden, u suprotnom vraća false.
function leden($dan) {
    $temperature = $dan['Temperature'];
    foreach ($temperature as $temp) {
        if ($temp > 0) {
            return false;
        }
    }
    return true;
}
echo "Da li je dan bio leden: " . (leden($dan) ? "Da" : "Ne") . "<br>";
echo "<hr>";

// // Zadatak 21
function tropski($dan){
    $temperature = $dan["Temperature"];
    foreach($temperature as $temp){
        if($temp < 24){
            return false;
        }
    }
    return true;
}
echo "Da li je dan bio tropski? " . (tropski($dan) ? "Jeste" : "Nije");
echo "<hr>";

// // Zadatak 22
function nepovoljan($dan){
    $temperature = $dan["Temperature"];  // "temperature" => [5, 12, 10, 20]
    for($i = 0; $i <count($temperature) -1; $i++){
        if (abs ($temperature[$i] - $temperature[$i+1]) > 8){
            return true;
        }
    }
    return false;
}
echo "Da li je dan bio nepovoljan? " . (nepovoljan($dan) ? "Jeste" : "Nije")


?>
