<?php 

require_once "kredit.php";

class StambeniKredit extends Kredit {

public function racunanjeMesecnihRata()
{
    $mesecnaKamata = $this->godisnjaKamata / 12/ 100;
    $stepen = pow(1 + $mesecnaKamata, $this->godinaOtplate * 12);
    $mesecnaRata = ($this->osnovica * $mesecnaKamata * $stepen) / ($stepen - 1);
    return $mesecnaRata;
}

}


//mesecna_kamata = god_kamata / 12 / 100;
//stepen = pow(1 + mesecna_kamata, god_otplate * 12);
//mesecna_rata = (osnovica * mesecna_kamata * stepen) / (stepen - 1);


?>

