<?php

require_once "connection.php";

// ideja je da u tabeli db_update cuvamo podatke o izvrsenim upitima kako se oni ne bi ponovo izvrsili, a da u nizu $upiti dodajemo upite koje je potrebmo izvrsiti nad bazom podataka ali da se obezbedimo da se oni izvrse samo jednom
/*
CREATE TABLE db_update (
    `id` INT(10) UNSIGNED PRIMARY KEY,
    `opis` VARCHAR(255) NOT NULL
);
*/

$upiti = [];

$upiti[] = [
    'id' => 1,
    'upit' => "CREATE TABLE IF NOT EXISTS `studenti` (
            `id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            `ime` VARCHAR(50) NOT NULL,
            `prezime` VARCHAR(100) NOT NULL,
            `email` VARCHAR(100),
            `broj_telefona` VARCHAR(20)
            );",
    'opis' => 'Dodavanje tabele studenti'
]; 

$upiti[] = [
    'id' => 2,
    'upit' => "INSERT INTO `studenti` VALUES (null, 'Andjela', 'Nikolic', 'andjela_nikolic@hotmail.com', '0692334575')",
    'opis' => 'Insert u tabelu studenti'
];

$upiti[] = [
    'id' => 3,
    'upit' => "INSERT INTO `studenti` VALUES (null, 'Filip', 'Jovanovic', null, null)",
    'opis' => 'Insert u tabelu studenti'
];

$izvrseni = $conn->query("SELECT id FROM `db_update`;");
$arr = $izvrseni->fetch_all(MYSQLI_ASSOC);
$ids = [];
foreach($arr as $value) {
    $ids[]=$value['id'];
}

if(count($upiti)==count($ids)) {
    echo "SVI UPITI SU IZVRSENI";
}
else {
    foreach($upiti as $u) {
        //ako mi trenutni id upita nije u nizu vec izvrsenih onda ga izvrsi
        if(!in_array($u['id'], $ids)) {
        $r = $conn->query($u['upit']);
            if($r) {
                //uspesno izvrsen
                $r2 = $conn->query("INSERT INTO `db_update` VALUES (" . $u['id'] . ", '" . $u['opis'] . "');");
                if(!$r2) {
                    echo "doslo je do greske:" . $conn->error;
                    break;
                }
                echo "upit sa id=" . $u['id'] . "je uspesno izvrsen";
            }
            else {
                echo "doslo je do greske:" . $conn->error;
                break;
            }
        }
    }
}

/*
if($conn->query($upit2)) {
    echo "uspesno napravljena tabela studenti";
}
else {
    echo "doslo je do greske:" . $conn->error;
}

$upit3 = "SELECT * FROM `studenti`;";
// unutar while petlje
$r = $conn->query($upit3);
if($r->num_rows > 0) {
    while($row = $r->fetch_assoc()) {
        echo "<p>id = " . $row['id'] . " ime = " . $row['ime'] .  "</p>";
    }
}
else {
    echo "nema rezultata za ovaj select: " . $upit3;
}
echo "<hr>";

// 2. nacin da uhvatimo 
$r2 = $conn->query($upit3);
$arr = $r2->fetch_all(MYSQLI_ASSOC);

foreach($arr as $row) {
    echo "<p>id = " . $row['id'] . " ime = " . $row['ime'] .  "</p>";
}



*/

?>