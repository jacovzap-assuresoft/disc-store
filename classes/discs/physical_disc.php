<?php
require_once 'disc.php';

class PhysicalDisc extends Disc
{
    public function __construct($edition)
    {
        parent::__construct($edition);
        $this->production_cost = 7;
    }

    public function calculateCost()
    {
        $edition_cost = $this->getEdition()->generateEditionCost();
        $this->cost = $edition_cost + $this->production_cost;
    }
}
?>
