<?php
require_once 'edition.php';

interface LaunchEditions extends Edition {
    public function generateLaunchCost();
}
?>
