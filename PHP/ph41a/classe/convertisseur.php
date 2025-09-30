convertisseur.php
<?php
class Convertisseur {
    public $taux;
    public $euro;
    public $dollar;

    function __construct() {
        $this->taux = 0.88351;
        $this->euro = 0;
        $this->dollar = 0;
    }
    function euros2dollars($e) {
        if ($this->taux == 0) {
            echo "</p>Division par 0";
            return NAN;
        }
        $this->euro = $e;
        $this->dollar = $e / $this->taux;
        return $this->dollar;
    }
    function dollars2euros($e) {
        if ($this->taux == 0) {
            return NAN;
        }
        $this->euro = $e;
        $this->dollar = $e * $this->taux;
        return $this->dollar;
    }
}
?>