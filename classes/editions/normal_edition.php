<?php
require_once 'launch_editions.php';

class NormalEdition implements LaunchEditions { 

 
    public function generateLaunchCost()
    {
        return 1.99;
    }

    public function generateEditionCost()
    {
        return 0 + $this->generateLaunchCost();
    }
}
?>
