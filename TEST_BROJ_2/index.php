<?php
 // ZADATAJ BROJ 1 (STABLA) Dat je niz stabala sa njihovim visinama (visina ne mora nužno biti ceo broj). Na nekoj visini od nivoa tla pušta se testera koja prolazi kroz redom kroz sva stabla u nizu.

 // 1. (5 poena) Kreirati niz koji sadrži visine najmanje 5 stabala.
 $stabla = [10.5, 15, 8, 5.5, 4, 9];
 $testera = 7;

/* 2. (10 poena) Napisati funkciju brojNeposecenihStabala($stabla, $testera) kojoj se prosleđuje niz sa visinama stabala, kao i visina na kojoj se pušta testera da seče, a koja vraća broj stabala koja nisu sečena prilikom prolaska testere. */
function brojNeposecenihStabala($stabla, $testera) {
    $brojNeisecenih = 0;
    foreach($stabla as $visina) {
        if ($visina > $testera) {
            $brojNeisecenih++;
        }
    }
    return $brojNeisecenih;
}

echo "Broj neposecenih stabala nakon prolaska testere: " . brojNeposecenihStabala($stabla, $testera); 
echo "<hr>";

/* 3. (15 poena) Napisati funkciju ukupnoPoseceno($stabla, $testera) kojoj se prosleđuje niz sa visinama stabala, kao i visina na kojoj se pušta testera da seče, a vraća koliko metara drva je ukupno posečeno. */
function ukupnoPoseceno($stabla, $testera) {
    $poseceno = 0;
    foreach($stabla as $visina) {
        if($visina >= $testera) {
            $poseceno += $visina;
        }
    }
    return $poseceno;
}

echo "Ukupno poseceno metara drva je: ". ukupnoPoseceno($stabla, $testera);
echo "<hr>";

/* 4. (20 poena) Napisati funkciju maxDuzina($stabla, $testera) kojoj se prosleđuje niz sa visinama stabala, kao i visina na kojoj se pušta testera da seče, a vraća dužinu maksimalnog niza uzastopno posečenih stabala. Na primer, ako su visine stabala zadate nizom [8.2, 6.6, 3.0, 4.0, 5.1, 6.6, 13.5, 4.0], i ako je visina testere postavljena na 5.0 metara, tada su uzastopni nizovi posečenih stabala [8.2, 6.6] i [5.1, 6.6, 13.5], a dužina maksimalnog niza jednaka je 3. */
function maxDuzina($stabla, $testera) {
    $maxDuzina = 0;
    $sadasnjaDuzina = 0;
    foreach($stabla as $visina) {
        if ($visina > $testera) {
            $sadasnjaDuzina++;
        }
        if ($sadasnjaDuzina > $maxDuzina) {
            $maxDuzina = $sadasnjaDuzina;
        }
        else {
            $sadasnjaDuzina = 0;
        }
    }
    return $maxDuzina;
}

echo "Duzina maksimalnog niza je: " . maxDuzina($stabla, $testera);
echo "<hr>";

// ZADATAK BROJ 2 PIJACA

/* Vlasnici jedne tezge na pijaci imaju stalni asortiman voća. Na početku dana, vlasnici iznose voće na tezgu, i za svaku vrstu voća poznata je količina i cena. Data su dva asocijativna niza $cena i $kolicina, u kojima su nazivi voća iz stalnog asortimana ključevi elemenata u oba niza. Vrednosti elemenata prvog niza $cena jesu cene voća (po kilogramu), dok su vrednosti elemenata drugog niza $kolicina količina voća koje se trenutno nalazi na tezgi (zadata u kilogramima). Neka oba niza imaju iste vrednosti ključeva (ne može se desiti da jedan ključ postoji u jednom nizu, a da ne postoji u drugom, i obratno). Pošto su ključevi iz oba niza nazivi voća iz stalnog asortimana, na tezgi se ne mora naći svaka vrsta voća (odnosno, dozvoljeno je da količina nekog voća bude jednaka 0). */

// 1. (5 poena) Kreirati dva niza $cena i $kolicina po uslovima zadatka.

$cena = [
    "tresnje" => 100,
    "banana" => 90,
    "jagode" => 200,
    "borovnice" => 300
];


$kolicina = [
    "tresnje" => 10,
    "banana" => 6,
    "jagode" => 15,
    "borovnice" => 0
];

/* 2. (10 poena) Napisti funkciju stanje($cena, $kolicina) kojoj je prosleđuju dva asocijativna niza po uslovu zadatka, a koja tekstom zelene boje ispisuje imena voća kojih ima na stanju. Ukoliko voća nema na stanju, iste informacije ispisati tekstom crvene boje. */
function stanje($cena, $kolicina) {
    foreach($cena as $voce => $kilogrami) {
        if($kolicina[$voce] > 0) {
        echo "<p style='color:green;'>Na stanju ima voca: $voce</p>";
    }
    else {
        echo "<p style='color:red;'>Na stanju trenutno nema voca: $voce</p>";
    }
 }
}

echo "<p>Na pijaci je trenutno ovakvo stanje:</p>";
stanje($cena, $kolicina);
echo "<hr>";

/* 3. (15 poena) Vlasnici tezge žele da prvo ponude ono voće čija je ukupna vrednost maksimalna (ukupna vrednost nekog voća računa se kao proizvod njegove količine i cene po kilogramu).Napisati funkciju prvoPonudi($cena, $kolicina) kojoj je prosleđuju dva asocijativna niza po uslovu zadatka, a koja vraća naziv voća sa maksimalnom vrednošću. Ukoliko ima više takvih voća, vratiti bilo koje. */

function prvoPonudi($cena, $kolicina) {
    $maksimalnaVrednost = 0;
    foreach($cena as $voce => $kilogrami) {
        $ukupnaVrednost = $kilogrami * $kolicina[$voce];
        if($ukupnaVrednost > $maksimalnaVrednost) {
            $maksimalnaVrednost = $ukupnaVrednost;
            $dobroVoce = $voce;
        }
    }
    return $dobroVoce;
}

echo "Voce sa maksimalnom vrednoscu: " . prvoPonudi($cena, $kolicina);
echo "<hr>";

/* 4. (20 poena) Kupac dolazi na tezgu sa namerom da kupi neko voće. Njegov spisak želja dat je preko asocijativnog niza $kupovina čiji su ključevi nazivi voća, dok su vrednosti količine svakog voća u kilogramima koju želi da kupi. Napisati funkciju vrednostKupovine($cena, $kolicina, $kupovina) kojoj je prosleđuju tri asocijativna niza po uslovu zadatka, a koja vraća ukupnu cenu koju kupac treba da plati. Ukoliko nekog voća nema dovoljno na stanju (odnosno, želja kupca je da kupi više kilograma nekog voća nego što ga ima na tezgi), dati kupcu ukupnu količinu tog voća na tezgi. */

$kupovina = [
    "tresnje" => 5,
    "banana" => 3,
    "jagode" => 7,
    "borovnice" => 9
];

function vrednostKupovine ($cena, $kolicina, $kupovina) {
    $ukupnaCena = 0;
    foreach($kupovina as $voce => $kolicina){

    }
}




?>