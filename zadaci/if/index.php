<?php
// ZADATAK 1
// Za dva uneta broja ispisati koji je veći a koji je manji.
$a = 5;
$b = 5;

if($a > $b) {
    echo "<p>Veci je broj $a.</p>";
}
else {
    echo "<p>Veci je broj $b</p>";
}
echo "<hr>";

// ZADATAK 2
// Ispitati da li je uneta temperatura u plusu ili je u minusu. Ukoliko je temperatura nula, računati da je u plusu.
$t = 25;
if($t >= 0) {
    echo "<p>Temperatura je u plusu.</p>";
}
else {
    echo "<p>Temperatura je u minisu.</p>";
}
echo "<hr>";

// ZADATAK 3
// U odnosu na pol (muški/ženski) koji je korisnik uneo prikazati odgovarajući avatar.
$pol = "F";
if($pol == "M") {
    echo "<p><img src ='./muski.jpg' alt=musko></p>";
}
else {
    echo "<p><img src='./zenski.jpg' alt=zensko></p>";
}
echo "<hr>";

// ZADATAK 4
// U odnosu na preuzete vrednosti AM i PM sa svog računara, ispisati da li je trenutno jutro ili popodne.
$dobaDana = date("a");
if($dobaDana < "am") {
    echo "<p>Trenutno je jutro.</p>";
}
else {
    echo "<p>Trenutno je popodne.</p>";
}
echo "<hr>";

// ZADATAK 5
// Za preuzetu godinu sa računara i unetu godinu rođenja izračunati da li je osoba punoletna ili maloletna.
$godina = date("Y");
$god_rodjenja = 2009;
$razlika = $godina - $god_rodjenja;
if($razlika < 18) {
    echo "<p>Osoba je maloletna.</p>";
}
else {
    echo "<p>Osoba je punoletna.</p>";
}
echo "<hr>";

// ZADATAK 6
// Poređati tri uneta broja od najmanjeg do najvećeg.
$a = 66;
$b = 19;
$c = 26;
if($a > $b) {
    $pom = $a;
    $a = $b;
    $b = $pom;
}
if($a > $c) {
    $pom = $a;
    $a = $c;
    $c = $pom;
}
if($b > $c) {
    $pom = $b;
    $b = $c;
    $c = $pom;
}
echo "<p>Brojevi idu od najmanjeg do najveceg: $a <= $b <= $c</p>";
echo "<hr>";

// ZADATAK BROJ 7
// Na osnovu unetog broja poena ispitati koju ocenu profesor treba da upiše učeniku.
// Učenik je položio ispit ukoliko ima više od 50 poena, u suprotnom je pao ispit.
// Za više od 50 poena učenik dobija ocenu 6
// Za više od 60 poena učenik dobija ocenu 7,
// za više od 70 poena učenik dobija ocenu 8, 
// za više od 80 poena učenik dobija ocenu 9
// i za više od 90 poena učenik dobija ocenu 10.
$brojPoena = 75;
if($brojPoena <= 50) {
    echo "<p>Ucenik je pao ispit.</p>";
}
elseif($brojPoena <= 60) {
    echo "<p>Ucenik je dobio ocenu 6.</p>";
}
elseif($brojPoena <= 70) {
    echo "<p>Ucenik je dobio ocenu 7.</p>";
}
elseif($brojPoena <= 80) {
    echo "<p>Ucenik je dobio ocenu 8.</p>";
}
elseif($brojPoena <= 90) {
    echo "<p>Ucenik je dobio ocenu 9.</p>";
}
else {
    echo "<p>Ucenik je dobio ocenu 10.</p>";
}
echo "<hr>";

// ZADATAK 8
// Preuzeti koji je dan u nedelji sa računara i ispitati da li je to radni dan ili je u pitanju vikend.
date_default_timezone_set('Europe/Belgrade');
$dan = date("N");
if($dan <= 5) {
    echo "<p>Radni dan je.</p>";
}
else {
    echo "<p>Vikend je.</p>";
}
echo "<hr>";

// ZADATAK 9
// Za vreme preuzeto sa računara ispisati dobro jutro za vreme manje od 12 sati ujutru, 
// dobar dan za vreme manje od 18 sati popodne
// i u ostalim slučajevima ispisati dobro veče.
$vreme = date("H");
if($vreme < 12) {
    echo "<p>Dobro jutro.</p>";
}
elseif($vreme < 18) {
    echo "<p>Dobar dan.</p>";
}
else {
    echo "<p>Dobro vece.</p>";
}
echo "<hr>";

// ZADATAK 10
// Uporediti dva uneta datuma i ispisati koji od njih je raniji.
$d1 = 9;
$m1 = 6;
$g1 = 1995;

$d2 = 5;
$m2 = 1;
$g2 = 1995;

if($g1 < $g2) {
    echo "<p>Raniji datum je $d1.$m1.$g1. </p>";
}
elseif($g1 > $g2) {
    echo "<p>Raniji datum je $d2.$m2.$g2.</p>";
}
elseif($m1 < $m2) {
    echo "<p>Raniji datum je $d1.$m1.$g1. </p>";
}
elseif($m1 > $m2) {
    echo "<p>Raniji datum je $d2.$m2.$g2.</p>";
}
elseif($d1 < $d2) {
    echo "<p>Raniji datum je $d1.$m1.$g1. </p>";
}
elseif($d1 > $d) {
    echo "<p>Raniji datum je $d2.$m2.$g2.</p>";
}
else {
    echo "<p>Datumi su isti.</p>";
}
echo "<hr>";

// ZADATAK 11
// Radno vreme jedne programerske firme je od 9h do 17h. Preuzeti vreme sa računara i ispitati da li u to vreme firma radi ili ne radi.
$trenutnoVreme = date("H");
if($trenutnoVreme >= 9 && $trenutnoVreme < 17) {
    echo "<p>Firma trenutno radi.</p>";
}
else {
    echo "<p>Firma ne radi.</p>";
}


?>

