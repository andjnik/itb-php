<?php  

//  Dat je niz u kojem su smešteni podaci o blogovima nekog korisnika. Svaki element tog niza odgovara jednom blogu, pri čemu se za svaki blog pamti naslov, broj lajkova, kao i broj dislajkova.

// 1. Kreirati niz $blogovi, pri čemu je svaki element tog niza jedan asocijativni niz. Svaki od tih asocijativnih niza mora od ključeva da ima “title” (naslov), “likes” (broj lajkova), kao i “dislikes” (broj dislajkova).

$blogovi = array(
    array("title" => "putovanja!", "likes" => 256, "dislikes" => 15),
    array("title" => "rodjendan", "likes" => 800, "dislikes" => 5),
    array("title" => "svadba", "likes" => 50, "dislikes" => 200),
    array("title" => "voznja", "likes" => 200, "dislikes" => 100),
    array("title" => "kampovanje", "likes" => 1000, "dislikes" => 500)
);

// 2. Napisati funkciju kojoj se prosleđuje $blogovi, a ona vraća ukupan broj lajkova.
function lajkovi($blogovi) {
    $brojLajkova = 0;
    foreach($blogovi as $blog) {
        $lajkovi = $blog["likes"];
        $brojLajkova += $lajkovi;
    }
    return $brojLajkova;
}
$ukupanBrojLajkova = lajkovi($blogovi);
echo "<p>Ukupan broj lajkova je: $ukupanBrojLajkova.</p>";
echo "<hr>";

// 3. Napisati funkciju kojoj se prosleđuje $blogovi, a ona vraća prosečan broj lajkova.
function prosekLajkova($blogovi) {
    $prosekLajk = 0;
    $ukupanBrojLajkova = lajkovi($blogovi);
    $brojBlogova = count($blogovi);
    if($brojBlogova > 0) {
        $prosekLajk = $ukupanBrojLajkova / $brojBlogova;
    }
    return $prosekLajk;
}
$prosek = prosekLajkova($blogovi);
echo "<p>Prosecan broj lajkova je: $prosek.</p>";
echo "<hr>";

// 4. Napisati funkciju kojoj se prosleđuje $blogovi, a ona ispisuje sve one naslove blogova koji imaju više lajkova nego dislajkova.
function nasloviSaViseLajkova($blogovi) {
    foreach($blogovi as $blog) {
        if($blog["likes"] > $blog["dislikes"]) {
            echo $blog["title"]. "<br>";
        }
    }
}
echo "Naslovi blogova sa više lajkova nego dislajkova: <br>";
nasloviSaViseLajkova($blogovi);
echo "<hr>";

// 5. Napisati funkciju kojoj se prosleđuje $blogovi, a ona ispisuje sve one naslove blogova koji imaju najmanje duplo više lajkova nego dislajkova.
function duploViseLajkova($blogovi) {
    foreach($blogovi as $blog) {
        if($blog["likes"] / 2 > $blog["dislikes"]) {
            echo $blog["title"]. "<br>";
        }
    }
}
echo "Naslovi sa duplo vise lajkova nego dislajkova: <br>";
duploViseLajkova($blogovi);
echo "<hr>";

// 6. Napisati funkciju kojoj se prosleđuje $blogovi, a ona ispisuje sve one naslove blogova koji se završavaju uzvičnikom.
function uzvicnici($blogovi) {
    foreach($blogovi as $blog) {
        if(substr($blog["title"], -1) == "!") {
            echo $blog["title"]. "<br>";
        }
    }
}
echo "Naslovi sa uzvicnicima su sledeci: <br>";
uzvicnici($blogovi);
echo "<hr>";

// 7. Napisati funkciju kojoj se prosleđuje $blogovi kao i $granica, a ona vraća broj blogova čiji je broj lajkova veći od granice.
function brojBlogovaSaLajkovimaIznadGranice($blogovi, $granica) {
    $brojBlogova = 0;
    foreach ($blogovi as $blog) {
        if ($blog["likes"] > $granica) {
            $brojBlogova++;
        }
    }
    return $brojBlogova;
}
$brojBlogovaSaLajkovimaIznadGranice = brojBlogovaSaLajkovimaIznadGranice($blogovi, 200);
echo "Broj blogova čiji je broj lajkova veći od granice: " . $brojBlogovaSaLajkovimaIznadGranice . "<br>";
echo "<hr>";

// 8. Napisati funkciju kojoj se prosleđuje $blogovi kao i $rec, a ona vraća prosečan broj lajkova za one blogove koji u naslovu sadrže prosleđenu reč.

// 9. Napisati funkciju kojoj se prosleđuje $blogovi, a ona ispisuje blogove koji imaju iznadprosečan broj lakova.
function iznadProsecan($blogovi) {
    $prosek = prosekLajkova($blogovi);
    foreach($blogovi as $blog) {
        if($blog["likes"] > $prosek) {
            echo $blog["title"]. "<br>";
        }
    }
}
echo "Blogovi iznad prosecnih lajkova su: <br>";
iznadProsecan($blogovi);
echo "<hr>";

// 10. Napisati funkciju kojoj se prosleđuje $blogovi, a ona ispisuje blogove koji imaju ispodprosečan broj dislakova.
function ispodProsecan($blogovi) {
    $nesvidjanja = 0;
    $prosekDislajka = 0;
    foreach($blogovi as $blog) {
        $dislike = $blog["dislikes"];
        $nesvidjanja += $dislike;
    }
    $prosekDislajka = $nesvidjanja / count($blogovi);
    foreach($blogovi as $blog) {
        if($blog["dislikes"] < $prosekDislajka) {
            echo $blog["title"]. "<br>";
        }
    }
}
echo "Blogovi ispodprosecnih broja dislajkova su: <br>";
ispodProsecan($blogovi);
echo "<hr>";

?>