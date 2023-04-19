<?php
    //echo je funkcija koja sluzi za ispisivanje
    $a = "Zdravo svete"; //promenljiva $a dobija vrednost "Zdravo svete"
    echo $a; // ovo prikazuje string "Zdravo svete"
    echo "<br>";
    $a = 28; //integer
    echo $a;
    echo "<br>";
    $a = 28 + 2;
    echo $a;
    echo "<br>";
    $a = 2.5 + 8.2; //float
    echo $a;
    echo "<br>";
    $a = 100;
    echo $a;
    echo "<br>";
    $b = $a - 20; // sa desne strane je dozvoljeno koriscenje promenljiva
    echo "vrednost promenljive b je " . " osamdeset " . $b;
    echo "<br>";
    echo "vrednost promenljive b je $b";
    echo "<br>";
    echo 'ovo je proba';
    echo "<br>";
    echo 'vrednost promenljive b je $b'; // neophodno je da budu dupli navodnici da bi se $b zamenilo vrednoscu
    echo "<br>";
    $c = "1"; // vrednost je string
    $d = $c + 2; // ovo prolazi zato sto se string konvertuje u broj pa se uveca za 2
    echo $d;
    echo "<br>";
    $d = $d + 2; //$d += 2; - ovo je skraceni zapis koji se cesto koristi kada staru vrednost uvecamo += delimo /= mnozimo *=
    echo $d; // nova vrednost promenljive $d je stara vrednost promenljive $d uvecana za 2
    echo "<br>";
    $d = $d - 5; //$d -= 5; - skraceni naziv
    echo $d;
    echo "<hr>";
    
    /* 1. zadatak */
    $h = 20;
    $m = 35;

    $rez = $h * 60 + $m; //$rez = $m + $n * 60;

    echo "Rezultat zadatka je " . $rez . " minuta";
    echo "<hr>";

    /* 2. zadatak */
    date_default_timezone_set('Europe/Belgrade');
    $h = date('G');
    $m = date ('i');

    echo "Trenutno vreme je " . $h . " sati i " . $m . " minuta<br>";

    $rez = $h * 60 + $m;

    echo "Rezultat zadatka 2. je " . number_format($rez, 0, ",", ".") . " minuta";
    echo "<hr>"
?>
