<?php
require_once 'disc.php';

class PhysicalDisc extends Disc{

    public function calculateCost()
    {
        $edition_cost = $this->getEdition()->generateEditionCost();
        $this->cost = $edition_cost + 7;
    }
}
?>
