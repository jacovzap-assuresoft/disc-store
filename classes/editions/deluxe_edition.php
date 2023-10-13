<?php
require_once 'launch_editions.php';

class DeluxeEdition implements LaunchEditions
{
    public function generateLaunchCost()
    {
        return 3.99;
    }

    public function generateEditionCost()
    {
        return 8.99 + $this->generateLaunchCost();
    }
}
