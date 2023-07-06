<?php

// ZADATAK 2
/* Za nekog studenta pamtimo informacije o ispitima koje je položio na nekom fakultetu. Za svaki ispit pamtimo sledeće informacije:
●	naziv ispita (string),
●	datum polaganja (string u formatu YYYY/MM/DD),
●   ocena (ceo broj između 6 i 10).
Za studenta pamtimo niz čiji elementi sadrže date informacije. */

// 7.	Kreirati niz po uslovima zadatka od barem pet elemenata.

$ispiti = array(

array("naziv" => "Uvod u pravo", "datum" => "2014/10/10", "ocena" => 10),
array("naziv" => "Rimsko pravo", "datum" => "2015/15/11", "ocena" => 9),
array("naziv" => "Privredno pravo", "datum" => "2022/10/12", "ocena" => 10),
array("naziv" => "Autorsko pravo", "datum" => "2022/06/20", "ocena" => 9),
array("naziv" => "Gradjansko pravo", "datum" => "2016/06/06", "ocena" => 10),
);

// 3. Napisati funkciju koja vraća maksimalnu ocenu koju je student dobio u toku studija.

function maksimalnaOcena($ispiti) {
    $maksimalnaOcena = 0;
    foreach ($ispiti as $ispit) {
        $ocena = $ispit["ocena"];
        if($ocena > $maksimalnaOcena) {
            $maksimalnaOcena = $ocena;
        }
    }
    return $maksimalnaOcena;
}

echo "Maksimalna ocena koju je student dobio je: " . maksimalnaOcena($ispiti) . "<br>";
echo "<hr>";

// 5.	Student je kandidat za studenta generacije ako je na ispitima dobijao samo devetke i desetke, i pri tome broj desetki nije manji od broja devetki. Napisati funkciju koja vraća da li je student kandidat za studenta generacije ili ne.

function studentGeneracije($ispiti) {
    $desetke = 0;
    $devetke = 0;

    foreach($ispiti as $ispit) {
        $ocena = $ispit["ocena"];
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
    return !($desetke > $devetke);
}

$statusStudenta = studentGeneracije($ispiti);
if($statusStudenta) {
    echo "<p>Student je za kandidata studenta geneacije.</p>";
}
else {
    echo "<p>Student nije za kandidata studenta geneacije.</p>";
}

echo "<hr>";

// 8.	Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja ispisuje predmete koje je polagao date godine.

function predmetiGodine($ispiti, $godina) {
    foreach($ispiti as $ispit) {
        $godinaIspita = substr($ispit["datum"], 0, 4);
        if($godinaIspita == $godina) {
            echo $ispit["naziv"] . "<br>";
        }
    }
}
predmetiGodine($ispiti, "2022");

// 9.	Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja vraća prosečnu ocenu studenta na ispitima koje je polagao date godine.

function prosecnaOcenaGodine($ispiti, $godina) {
    $zbir = 0;
    $brojIspita = 0;
    foreach($ispiti as $ispit) {
        $godinaIspita = substr($ispit["datum"], 0, 4);
        if($godinaIspita == $godina) {
            $zbir += $ispit["ocena"];
            $brojIspita++;
        }
    }
    if($brojIspita == 0) {
        return 0;
    }

    $prosek = $zbir / $brojIspita;
    return $prosek;
}
echo "Prosečna ocena u 2022. godini: " . prosecnaOcenaGodine($ispiti, '2022') . "<br>";
echo "<hr>";

// 10.	Napisati funkciju koja vraća naziv predmeta na kojem je student dobio maksimalnu ocenu. Ukoliko ima više ovakvih predmeta, vratiti onaj koji je najskorije položio.

function predmetiSaMaksimalnomOcenom($ispiti) {
    $maxOcena = maksimalnaOcena($ispiti);
    $maxTime = 0;
    $rezultat = "";
    foreach ($ispiti as $ispit) {
        if($ispit["ocena"] == $maxOcena && strtotime($ispit["datum"]) >= $maxTime) {
            $maxTime = strtotime($ispit["datum"]);
            $rezultat = $ispit["naziv"];
        }

    }
    return $rezultat;
}

echo "Predmeti na kojima je dobio maksimalnu ocenu :" . predmetiSaMaksimalnomOcenom($ispiti)  . "<br>";






?>