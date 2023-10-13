<?php
require_once 'aniversary_editions.php';

class NostalgiaEdition implements AniversaryEditions
{
    public function generateEditionCost()
    {
        return 5.99;
    }
}
?>
