<?php

abstract class Kredit {
    protected $naziv;
    protected $osnovica;
    protected $godisnjaKamata;
    protected $godinaOtplate;

    public function __construct($naziv, $osnovica, $godisnjaKamata, $godinaOtplate)
    {
        $this->naziv = $naziv;
        $this->osnovica = $osnovica;
        $this->godisnjaKamata = $godisnjaKamata;
        $this->godinaOtplate = $godinaOtplate;
    }

    public function ispis() {
        echo "Naziv: " . $this->naziv . "<br>";
        echo "Osnovica je: " . $this->osnovica . "<br>";
        echo "Godisnja kamata je: " . $this->godisnjaKamata . "<br>";
        echo "Godina otplate je: " . $this->godinaOtplate . "<br>";
    
    }

    abstract public function racunanjeMesecnihRata();
}



?>