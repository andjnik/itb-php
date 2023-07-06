<?php
// ZADATAK 1 Sa niškog aerodroma u toku jednog dana polaze letovi ka različitim gradovima. Dat je asocijativni niz u kojem su ključevi destinacije letova, a vrednosti broj putnika na svakom letu.

// 1. Kreirati niz $letovi po uslovima zadatka.
$letovi = array(
    "Nis" => 150,
    "Atina" => 100,
    "Njujork" => 200,
    "Bec" => 50,
    "Prag" => 100,
    "London" => 50

);
//  2. Napisati funkciju maxBrojPutnika($letovi) kojoj se prosleđuje niz letova, a funkcija vraća maksimalan broj putnika na nekom od letova.
function maxBrojPutnika($letovi) {
    $maxPutnici = 0;
    foreach ($letovi as $putnici) {
        if($putnici > $maxPutnici) {
            $maxPutnici = $putnici;
        }
    }
    return $maxPutnici;
}
$maxPutnici = maxBrojPutnika($letovi);
echo "<p>Maksimalan broj putnika na letu: $maxPutnici</p>";
echo "<hr>";

//  3. Napisati funkciju brojMax($letovi) kojoj se prosleđuje niz letova, a funkcija vraća broj letova na kojima je leteo maksimalan broj putnika.
function brojMax($letovi) {
    $maxBrojPutnika = maxBrojPutnika($letovi);
    $brojLetova = 0;
    foreach ($letovi as $putnici) {
        if ($putnici == $maxBrojPutnika) {
            $brojLetova++;
        }
    }
    return $brojLetova;
}
$brojMaxPutnika = brojMax($letovi);
echo "<p>Broj letova sa maksimalnim brojem putnika: $brojMaxPutnika</p>";
echo "<hr>";

// 4. Napisati funkciju prosek($letovi) kojoj se prosleđuje niz letova, a funkcija vraća prosečan broj putnika po letu sa niškog aerodroma tog dana.
function prosek($letovi) {
    $sum = 0;
    foreach($letovi as $putnici) {
        $sum += $putnici;
    }
    return round ($sum / count($letovi));
}
$prosekPutnika = prosek($letovi);
echo "<p>Prosečan broj putnika po letu: $prosekPutnika.</p>";
echo "<hr>";

// 5. Dan je bio isplativ za niški aerodrom ukoliko je u većini letova broj putnika bio veći od zadate granice. Napisati funkciju isplativ($letovi, $granica) kojoj se prosleđuju niz letova, kao i granica, a funkcija ispituje da li je dan bio isplativ (vraća true ako jeste i false ako nije).
function isplativ($letovi, $granica) {
    $iznad = 0;
    $ispod = 0;
    foreach($letovi as $putnici) {
        if($putnici >= $granica) {
            $iznad++;
        }
        else {
            $ispod++;
        }
    }
    if($iznad >= $ispod) {
        return true;
    }
    else {
        return false;
    }
}

// echo "Dan je bio isplativ za granicu 100: ".(isplativ($letovi, 100)?"JESTE":"NIJE");
echo "Dan je bio isplativ za granicu 100: ";
$isplativ = isplativ($letovi, 300);
if ($isplativ) {
    echo "JESTE";
}
else{
    echo "NIJE";
}
echo "<hr>";

// 6. Dan je alarmantan za niški aerodrom ukoliko postoji neki let u kojem je broj putnika bio manji od zadate granice. Napisati funkciju alarmantan($letovi, $granica) kojoj se prosleđuju niz letova, kao i granica, a funkcija ispituje da li je dan bio alarmantan (vraća true ukoliko je postojao let u kojem je broj putnika bio manji od granice, i false ako nije).
function alarmantan($letovi, $granica) {
    foreach ($letovi as $putnici) {
        if($putnici < $granica) {
            return true;
        }
    }
    return false;
}

echo "Dan je bio alarmantan za granicu 100: ".(alarmantan($letovi, 100)?"JESTE":"NIJE");
echo "<hr>";

// 7. Napisati funkciju dobreDestinacije($letovi) kojoj se prosleđuje niz letova, a funkcija ispisuje letove sa natprosečnim brojem putnika.
function dobreDestinacije($letovi) {
    $prosekPutnika = prosek($letovi);
    foreach($letovi as $destinacije => $putnici) {
        if ($putnici >= $prosekPutnika) { 
            echo "<p>$destinacije</p>";
        }
    }
}

echo "Dobre destinacije su:";
dobreDestinacije($letovi);



?>