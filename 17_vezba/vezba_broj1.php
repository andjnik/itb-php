<?php 

// ZADATAK BROJ 1
// Dat je niz celih brojeva u kojima se čuvaju ocene jednog studenta koje je dobio polagajući različite predmete.

// 1. Kreirati niz po uslovima zadatka od barem pet elemenata. Za sve funkcije iz ovog zadatka, kao parametar se prenosi niz ocena.

$ocene = [9, 9, 9, 7, 9, 10, 10, 10, 10];

// 2. Napisati funkciju koja vraća prosečnu ocenu studenta.

function prosecnaOcena($ocene) {
    $zbir = 0;
    $brojOcena = 0;

    foreach($ocene as $ocena) {
        $zbir += $ocena;
        $brojOcena++;
    }

    $prosek = $zbir / $brojOcena;
    return $prosek;
}

echo "Prosecna ocena studenta je: " . prosecnaOcena($ocene) . "<br>";
echo "<hr>";

// 3. Napisati funkciju koja vraća maksimalnu ocenu koju je student dobio u toku studija.

function maksimalnaOcena($ocene) {
    $maksimalna = 0;

    foreach($ocene as $ocena) {
        if($ocena > $maksimalna) {
            $maksimalna = $ocena;
        }
    }
    return $maksimalna;
}

echo "Maksimalna ocena koju je student dobio je: " . maksimalnaOcena($ocene) . "<br>";
echo "<hr>";

// 4. Napisati funkciju koja vraća broj predmeta na kojima je dobio maksimalnu ocenu u toku studija.

function predmetiSaMaxOcenom($ocene) {
    $max = maksimalnaOcena($ocene);
    $brojPredmeta = 0;

    foreach($ocene as $ocena) {
        if($ocena == $max) {
            $brojPredmeta++;
        }
    }
    return $brojPredmeta;
}

echo "Broj predmeta iz kojih je student imao najvecu mogucu ocenu: " . predmetiSaMaxOcenom($ocene) . "<br>";
echo "<hr>";

// 5.	Student je kandidat za studenta generacije ako je na ispitima dobijao samo devetke i desetke, i pri tome broj desetki nije manji od broja devetki. Napisati funkciju koja vraća da li je student kandidat za studenta generacije ili ne.

function studentGeneracije($ocene) {
    $desetke = 0;
    $devetke = 0;

    foreach($ocene as $ocena) {
        if($ocena == 9) {
            $devetke++;
        }
        elseif($ocena == 10) {
            $desetke++;
        }
        else {
            return false;
        }
    }
    return !($desetke > $devetke); // $desetke >= $devetke
}

$statusStudenta = studentGeneracije($ocene);
if($statusStudenta) {
    echo "<p>Student je kandidat za studenta generacije.</p>";
}
else {
    echo "<p>Student nije kandidat za studenta generacije.</p>";
}
echo "<hr>";

/* 6.	Napisati funkciju koja vraća maksimalnu dužinu podniza u kojoj je dobijao maksimalnu ocenu (ova dužina može biti jednaka 1). 
Na primer, za niz [10, 10, 9, 10, 10, 10, 8, 9, 9, 9, 9, 10, 10, 10], funckija treba da vrati 3.
Na primer, za niz [6, 8, 6, 6, 6, 7, 7, 9, 7, 7, 7, 7], funkcija treba da vrati 1. */

function najvecaDuzinaNiza($ocene) {
    $max = maksimalnaOcena($ocene);
    $trenutnaDuzina = 0;
    $maksimalnaDuzina = 0;

    foreach($ocene as $ocena) {
        if($ocena == $max) {
            $trenutnaDuzina++;
        }
            if($trenutnaDuzina > $maksimalnaDuzina) {
            $maksimalnaDuzina = $trenutnaDuzina;
            }
        else {
            $trenutnaDuzina = 0;
        }
    }
    return $maksimalnaDuzina;
}

echo "Maksimalna duzina niza u kojoj je student dobijao maksimalnu ocenu je: " . najvecaDuzinaNiza($ocene) . "<br>";
echo "<hr>";








?>