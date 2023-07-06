<?php  

// ZADATAK 1
// Sa niškog aerodroma u toku jednog dana polaze letovi ka različitim gradovima. Dat je asocijativni niz u kojem su ključevi destinacije letova, a vrednosti broj putnika na svakom letu.

// 1. Kreirati niz $letovi po uslovima zadatka
$letovi = array(
    "Nis" => 150,
    "Njujork" => 200,
    "Bec" => 50,
    "Pariz" => 300,
    "Prag" => 200
);

// 2. Napisati funkciju maxBrojPutnika($letovi) kojoj se prosleđuje niz letova, a funkcija vraća maksimalan broj putnika na nekom od letova.
function maxBrojPutnika($letovi) {
    $maxPutnici = 0;
    foreach($letovi as $putnici) {
        if($putnici > $maxPutnici) {
            $maxPutnici = $putnici;
        }

    }
    return $maxPutnici;
}

$maksimumPutnici = maxBrojPutnika($letovi);
echo "<p>Maksimum broj putnika je: $maksimumPutnici</p>";
echo "<hr>";


// 3. Napisati funkciju brojMax($letovi) kojoj se prosleđuje niz letova, a funkcija vraća broj letova na kojima je leteo maksimalan broj putnika.
function brojMax($letovi) {
    $maksimumPutnici = maxBrojPutnika($letovi);
    $brojLetova = 0;
    foreach($letovi as $putnici) {
        if($maksimumPutnici == $putnici) {
            $brojLetova++;
        }
    }
    return $brojLetova;
}

$resenje2 = brojMax($letovi);
echo "<p>Broj letova na kojima je leteo maksimalan broj putnika je: $resenje2.</p>";
echo "<hr>";

// 4. Napisati funkciju prosek($letovi) kojoj se prosleđuje niz letova, a funkcija vraća prosečan broj putnika po letu sa niškog aerodroma tog dana.

$letovi = array(
    "Nis" => 150,
    "Rim" => 50,
    "Njujork" => 1234,
    "Prag" => 150
);

function prosek($letovi) {
    $zbir = 0;
    foreach($letovi as $putnici) {
        $zbir += $putnici;
    }
    return $zbir / count($letovi);
}
$prosek = prosek($letovi);
echo "<p>Prosecan broj putnika je: $prosek.</p>";
echo "<hr>";

// 5. Dan je bio isplativ za niški aerodrom ukoliko je u većini letova broj putnika bio veći od zadate granice. Napisati funkciju isplativ($letovi, $granica) kojoj se prosleđuju niz letova, kao i granica, a funkcija ispituje da li je dan bio isplativ (vraća true ako jeste i false ako nije).
function isplativ($letovi, $granica) {
    $iznadProseka = 0;
    foreach($letovi as $putnici) {
        $iznadProseka += $putnici;
        if($iznadProseka > $granica) {
            return true;
        }
    }
    $isplativ = count($letovi) - $iznadProseka;
}












?>