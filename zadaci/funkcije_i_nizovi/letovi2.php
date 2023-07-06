<?php 
// ZADATAK 2

// 8.
$letovi = array(
    array("dest" => "Nis", "country" => "Srbija", "time" => "08:00"),
    array("dest" => "Pariz", "country" => "Francuska", "time" => "14:30"),
    array("dest" => "Beograd", "country" => "Srbija", "time" => "22:00"),
    array("dest" => "London", "country" => "Velika Britanija", "time" => "11:00"),
    array("dest" => "Bec", "country" => "Austrija", "time" => "13:30"),
    array("dest" => "Nis", "country" => "Srbija", "time" => "17:00"),
);

function ispisSvihLetova($letovi) {
    foreach ($letovi as $let) {
        $destinacija = $let["dest"];
        $zemlja = $let["country"];
        $vreme = $let["time"];
        echo "<p>Destinacija: $destinacija, Drzava: $zemlja, Vreme polaska: $vreme </p>";
    }
}

ispisSvihletova($letovi);

// Dodatni: ispisi sve letove, ali plavom bojom ako lete prepodne, a ljubicastom ako lete popopodne
function ispisSvihLetovaBoja($letovi) {
    foreach ($letovi as $let) {
        $destinacija = $let["dest"];
        $zemlja = $let["country"];
        $vreme = $let["time"];
        $vremeInt = (int) substr($let["time"], 0, 2);
        if ($vremeInt < 12) {
            echo "<p style='color:blue'>Destinacija: $destinacija, Drzava: $zemlja, Vreme polaska: $vreme </p>";
        }
        else {
            echo "<p style='color:purple'>Destinacija: $destinacija, Drzava: $zemlja, Vreme polaska: $vreme </p>";
        }
        
    }
}

ispisSvihLetovaBoja($letovi);


// 9. Napisati funkciju brojLetovaZaZemlju($letovi, $zemlja) kojoj se prosleđuju niz letova, kao i zemlja, a funkcija vraća broj letova do date zemlje.

function brojLetovaZaZemlju($letovi, $zemlja) {
    $brojLetova = 0;
    foreach ($letovi as $let ) {
        if($let['country'] == $zemlja) {
            $brojLetova++;
        }
    }
    return $brojLetova;
}


// 10. Napisati funkciju visePrePodne($letovi) kojoj se prosleđuje niz letova, a određuje da li je bilo više letova pre podne ili posle podne. Ukoliko je bilo više letova pre podne, vratiti true, a u suportnom, vratiti false.
function visePrePodne($letovi) {
    $prepodne = 0;
    $popodne = 0;
    foreach($letovi as $let) {
    }
}

// 11
function ispisLetovaDoSada($letovi) {
    date_default_timezone_set('Europe/Belgrade');
    $trenutnoVreme = date("H:i");
    foreach($letovi as $let) {
        if($trenutnoVreme >= $let['time']) {
            echo $let['dest'] . "<br>";
        }
    }
}
echo ispisLetovaDoSada($letovi);

// 12.
function rizicniLetovi($letovi, $crvenaZona) {
    foreach ($letovi as $let) {
        $destinacije = $let["country"]; //  Uzimamo vrednost destinacije za trenutni let i dodeljujemo je varijabli $destinacije.
        $rizicnaZemlja = false; // $rizicnaZemlja = false; - Inicijalizujemo promenljivu $rizicnaZemlja na false. Ova promenljiva će biti postavljena na true ako je destinacija trenutnog leta u crvenoj zoni.
        foreach ($crvenaZona as $zemlja) // Prolazimo kroz svaku zemlju u nizu crvene zone. Varijabla $zemlja će sadržati trenutnu zemlju tokom iteracije.
        {
            if ($destinacije == $zemlja) // if ($destinacije == $zemlja) - Proveravamo da li je destinacija trenutnog leta jednaka trenutnoj zemlji iz crvene zone. Ako je uslov ispunjen, to znači da je destinacija u crvenoj zoni, pa postavljamo $rizicnaZemlja na true i izlazimo iz unutrašnje petlje pomoću break kako bismo prekinuli dalje iteracije.
            {
                $rizicnaZemlja = true;
                break;
            }
        }
        if ($rizicnaZemlja)
        {
        echo "<p style='color:red'>Destinacija je: " . $let["dest"] . " Zemlja je: " . $let["country"] . " Vreme je: " . $let["time"] . "</p>";
        }
    }
}
$crvenaZona = ["Francuska", "Italija"];
rizicniLetovi($letovi, $crvenaZona);
echo "<hr>";

// 13 Trazene destinacije
function trazeneDestinacije($letovi)
    {
        $polasci = [];
        foreach ($letovi as $let)
        {
            if(!isset($polasci[$let["dest"]])){
                $polasci[$let["dest"]] = 0;
            }
            $polasci[$let["dest"]]++;
        }
        foreach ($polasci as $d => $br)
        {
            if ($br > 1)
            {
                echo "<p>$d je trazena destinacija</p>";
            }
        }
    }
    echo "Tražene destinacije:";
    trazeneDestinacije($letovi);
    echo "<hr>";

// 14 Napisati funkciju prosecanBrojLetovaZaZemlju($letovi) kojoj se prosleđuje niz letova, a koja vraća prosečan broj letova ka nekoj zemlji.
function prosecanBrojLetovaZaZemlju($letovi, $zemlja) {
    $brojLetova = 0;
    $brojZemalja = 0;
    foreach ($letovi as $let) {
        if ($let['country'] === $zemlja) {
            $brojLetova++;
        }
            $brojZemalja++;
        }
    
        if ($brojZemalja === 0) {
            return 0;
        }
    
    $prosecanBrojLetova = $brojLetova / $brojZemalja;
    return $prosecanBrojLetova;
}
$prosecniBrojLetova = prosecanBrojLetovaZaZemlju($letovi, "Srbija");
echo "Prosečan broj letova ka Srbiji: " . $prosecniBrojLetova;
echo "<hr>";

?>