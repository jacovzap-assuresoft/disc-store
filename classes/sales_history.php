<?php
include('./discs/disc.php');

class SalesHistory{
   private $sales = array();

    public function addSale(Disc $disc){
         $this->sales[] = $disc;
    }

    public function getSales(){
        return $this->sales;
    }
}
?>
