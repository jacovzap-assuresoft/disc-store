<?php
require_once 'disc.php';

class PhysicalDisc extends Disc{

    public function calculateCost()
    {
        $this->cost = 19.99;
    }
}
?>
