<?php
require_once 'disc.php';

class DigitalDisc extends Disc{

    public function calculateCost()
    {
        $edition_cost = $this->getEdition()->generateEditionCost();
        $this->cost = $edition_cost * 0.5;
    }
    
}
?>
