<?php
include('../editions/edition.php');

abstract class Disc {
     private $edition;
     protected $cost = 0;
     private $album_name = "The never 'C'n Album";

        public function __construct(Edition $edition) {
            $this->edition = $edition;
        }

        public function getEdition() {
            return $this->edition;
        }

        public function setEdition(Edition $edition) {
            $this->edition = $edition;
        }

        public function getAlbumName() {
            return $this->album_name;
        }

        public function setAlbumName($album_name) {
            $this->album_name = $album_name;
        }

        public function getCost() {
            return $this->cost;
        }

        public abstract function calculateCost();
}
?>
