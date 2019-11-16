<?php
    class Person{

        private $nama;
        private $alamat;

        public function showPerson(){
            echo "<br> Nama: ".$this->getNama();
            echo "<br> Alamat: ".$this->getAlamat();
        }

        public function setNama($nama){
            $this->nama = $nama;
        }

        public function getNama(){
            return $this->nama;
        }

        public function setAlamat($alamat){
            $this->alamat = $alamat;
        }

        public function getAlamat(){
            return $this->alamat;
        }


    }
?>