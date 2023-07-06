<?php  
class Film {
    private $naslov; // polje
    private $reziser;
    private $godinaIzdanja;

    // Geteri

    public function getNaslov() {
        return $this->naslov;
    }

    public function getReziser() {
        return $this->reziser;
    }

    public function geGodinaIzdanja() {
        return $this->godinaIzdanja;
    }

    public function setGodinaIzdanja($godina) {
        if($godina > 1800) {
            $this->godinaIzdanja = $godina;
        }
        else {
            
        }

    }



    function stampaj() {
        echo "
            <table>
                <tr>
                    <td>Naslov filma: </td>
                    <td>$this->naslov</td>
                </tr>
                <tr>
                    <td>Ime rezisera:: </td>
                    <td>$this->reziser</td>
                </tr>
                <tr>
                    <td>Godina izdanja: </td>
                    <td>$this->godinaIzdanja</td>
                </tr>
            </table>
        "; //metod
    }
}

$f1->setNaslov("Toma");
$f1->setGodinaIzdanja(2005);





?>