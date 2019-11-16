<?php

    include_once('Person.php');

    class Pelanggan extends Person{
        
        private $noPelanggan;

        public function setNoPelanggan($noPelanggan){
            $this->noPelanggan = $noPelanggan;
        }

        public function getNoPelanggan(){
            return $this->noPelanggan;
        }

        public function showPerson(){
            echo "No. Pelanggan: ".$this->getNoPelanggan();
            parent::showPerson();
        }

    }

?>