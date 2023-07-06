<?php 

class Oblik {

    private $nazivOblika;

    const TROUGAO = "Trougao";
    const PRAVOUGAONIK = "Pravougaonik";
    const KVADRAT =  "Kvadrat";
    const ROMB = "Romb";

    public function __construct($n)
    {
        $this->nazivOblika = $n;
    }
    
    public function obim() { // override
        return 0;
    }
    

    public function povrsina() {
        return 0;
    }

    /*
    public function obim($a, $b) { // overload (preklapanje)
        return 0;
    }

    */

    public function ispis() {
        echo "<p> $this->nazivOblika: " . $this->obim() . ", " . $this->povrsina() . "</p>";
    }
}





?>