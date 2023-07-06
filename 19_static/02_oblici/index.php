<?php 

require_once "trougao.php";
require_once "pravougaonik.php";
require_once "kvadrat.php";

$t = new Trougao(3, 4, 5);

$t->setA(60); // kada pozivamo bilo koju drugu metodu koja nije konstruktor, OBJEKAT JE VEC KREIRAN

echo "<p>" . $t->obimTrougla() . ", " . $t->povrsinaTrougla() . "</p>";

$p = new Pravougaonik(5, 9);

echo "<p>" . $p->obimPravougaonika() . ", " . $p->povrsinaPravougaonika() . "</p>";

$k = new Kvadrat(3);
echo "<p>" . $k->obimKvadrata() . ", " . $k->povrsinaKvadrata() . "</p>";

$oblici = [$t, $p, $k];
foreach($oblici as $oblik) {
    // Sta je ovde $oblik? Da li je ovo Trougao, Kvadrat ili Pravougaonik?
    echo "<p>" . $oblik->obim() . ", " . $oblik->povrsina() . "</p>";
}



?>