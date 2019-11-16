<?php
    class Prodi{
        private $kode;
        private $namaProdi;

        public function setKode($kode){
            $this->kode = $kode;
        }

        public function setNamaProdi($namaProdi){
            $this->namaProdi = $namaProdi;
        }

        public function getKode(){
            return $this->kode;
        }

        public function getNamaProdi(){
            return $this->namaProdi;
        }

        public function showProdi(){
            echo "kode : ".$this->getKode();
            echo "<br>Nama Prodi : ".$this->getNamaProdi();
        }
    }
?>