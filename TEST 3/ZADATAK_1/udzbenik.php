<?php 

require_once "knjiga.php";

class Udzbenik extends Knjiga {

    private $tiraz;

    public function __construct($naslov, $brStrana, $cena, $tiraz) {
        parent::__construct($naslov, $brStrana, $cena);
        $this->setTiraz($tiraz);
    }

    public function getTiraz() {
        return $this->tiraz;
    }

    public function setTiraz($tiraz) {
        if($tiraz > 0) {
            $this->tiraz = $tiraz;
        }
        else {
            "<p>Tiraz ne ispunjava zadate uslove.</p>";
        }
    }

    public function stampa() {
        parent::stampa();
        echo "Tiraz knjige je: " . $this->getTiraz() . "<br>";
    }

    public function jedinicnaCena() {
        return $this->getCena() / $this->getTiraz();   
    }
}

?>