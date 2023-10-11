<?php
require_once 'launch_editions.php';

class DeluxeEdition implements LaunchEditions
{

    public function generateLaunchCost()
    {
        return 1.99;
    }

    public function generateEditionCost()
    {
        return 11.99 + $this->generateLaunchCost();
    }
}
