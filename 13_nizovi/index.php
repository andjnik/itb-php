<?php

   // Bez nizova
   $car1 = "BMW";
   $car2 = "Volvo";
   $car3 = "Toyota";

   // Sa nizovima
   $cars = array("BMW", "Volvo", "Toyota"); // $cars = ["BMW", "Volvo", "Toyota"];
   // Elementi ovog niza su: "BMW", "Volvo", "Toyota"
   // Indeksi elemenata ovog niza su: 0, 1, 2

   var_dump($cars);
   var_dump($car1);

   echo "$car1";
   echo "$cars";
   echo "<hr>";

   print_r($cars);
   echo "<hr>";


   // Pristupanje elementima
   $prviElement = $cars[0];
   $drugiElement = $cars[1];
   $treciElement = $cars[2];

   echo "$prviElement, $drugiElement, $treciElement";
   echo "<p>Prvi element u nizu je: $cars[0]</p>";
   echo "<p>Osmi element u nizu je: $cars[7]</p>";

   // Izmena elemenata se vrsi ukoliko pod tim indeksom u nizu vec postoji neki element
   $cars[1] = "Peugeot";
   print_r($cars);

   // Dodavanje elementa ce se vrsiti ukoliko pod navedenim indeksom ne postoji vec element u nizu
   $cars[30] = "Audi";
   print_r($cars);

   /////////////////////////////////////
   $polaznici = array(); // $polaznici = [];
   $polaznici[] = "Aleksandar";
   $polaznici[] = "Uros";
   $polaznici[] = "Milijana";
   $polaznici[] = "Andreja";
   $polaznici[] = "Nikola";

   print_r($polaznici);

   $duzina = count($polaznici); // Prebrojava koliko polaznika ima tj. koliko ima elemenata u nizu
   echo "<p>U nizu ima $duzina polaznika.</p>";

    for($i = 0; $i < $duzina; $i++) {
        echo "<p>$polaznici[$i]</p>";
    }

    ///////////////////////////////////////////////
    // 2. ZADATAK
    // Odrediti zbir elemenata celobrojnog niza.

    $brojevi = [5, 14, -4, 0, 11, -7, 9];
    $suma = 0;
    for($i = 0; $i < count($brojevi); $i++) {
       $suma += $brojevi[$i];
    }
    echo "<p>Suma elemenata je: $suma</p>";

    // Ugradjena funkcija
    $zbir = array_sum($brojevi);
    echo "<p>Zbir elemenata niza je: $zbir</p>";

    /////////////////////////////////////////
    // 3. ZADATAK
    // Odrediti srednju vrednost elemenata celobrojnog niza.
    $brElemenata = count($brojevi);
    $arsr = $zbir / $brElemenata;
    echo "<p>Aritmeticka sredina je: $arsr</p>";


    //////////////////////////////////////////////
    // 4. ZADATAK
    //  Odrediti maksimalnu vrednost u celobrojnom nizu.
    $brojevi = [5, 14, -4, 0, 11, -7, 9];
    $maks = $brojevi[0];
    for($i = 0; $i < count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks) {
            $maks = $trenutniElement;
        }
    }
    echo "<p>Najveci element ovog niza je $maks</p>";

    ///////////////////////////////////////////////
    // 6. ZADATAK
    // Odrediti indeks najvećeg elementa celobrojnog niza.
   

    // 6.1 indeks prvog pojavljivanja max elementa
    $brojevi = [5, 14, -4, 14, 11, -7, 14];
    $maks = $brojevi[0];
    $indexMaks = 0;
    for($i = 0; $i <count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks) {
            $maks = $trenutniElement;
            $indexMaks = $i;
        }
    }
    echo "<p>Najveci element ima vrednost $maks, a index njegovogprvog pojavljivanja je $indexMaks</p>";

    ////////////
    // 6.1. index poslednjeg pojavljivanja max elementa
    $brojevi = [5, 14, -4, 14, 11, -7, 14];
    $maks = $brojevi[0];
    $indexMaks = 0;
    for($i = 0; $i <count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement >= $maks) {
            $maks = $trenutniElement;
            $indexMaks = $i;
        }
    }
    echo "<p>Najveci element ima vrednost $maks, a index njegovog poslednjeg pojavljivanja je $indexMaks</p>";

    // Svi maksimumi
    $brojevi = [5, 14, -4, 14, 11, -7, 14];
    $maks = $brojevi[0];
    // 1.prolazak odredjuje maksimum
    for($i = 0; $i <count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks) {
            $maks = $trenutniElement;
        }
    }
    echo "<p>Najveci element ima vrednost $maks. A indeksi pojavljivanja ovog elementa su: ";
    // 2. prolazak trazi sve elemente jednake maksimum i belezi njihove indekse
    $sviIndeksiMaks = [];
    for($i = 0; $i <count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement == $maks) {
            $sviIndeksiMaks [] = $i;
            echo "<p>$i</p>";
        }
    }
    echo "<hr>";

    // 345 nacin
    $brojevi = [5, 14, -4, 14, 11, -7, 14];
    $sviIndeksiMaks = [];
    $maks = $brojevi[0];
    for($i = 0; $i <count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if($trenutniElement > $maks) {
           $maks = $trenutniElement;
           $sviIndeksiMaks = [$i];
        }
        elseif($trenutniElement == $maks) {
            $sviIndeksiMaks[] = $i;
            
        }
    }
    echo "Najveci element ima vrednost $maks, a njegovi indeksi pojavljivanja su: ";
    for($i = 0; $i < count($sviIndeksiMaks); $i++) {
        echo "<p>$sviIndeksiMaks[$i] </p>";
    }

    
?>