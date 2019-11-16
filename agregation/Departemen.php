<?php
    include_once('Jurusan.php');
    class Departemen{

        private $kodeDepartemen;
        private $namaDepartemen;
        private $jurusan;

        public function setKodeDepartemen($kodeDepartemen){
            $this->kodeDepartemen = $kodeDepartemen;
        }

        public function getKodeDepartemen(){
            return $this->kodeDepartemen;
        }

        public function setNamaDepartemen($namaDepartemen){
            $this->namaDepartemen = $namaDepartemen;
        }

        public function getNamaDepartemen(){
            return $this->namaDepartemen;
        }

        public function showDepartemen(){
            echo "Kode Departemen: ".$this->getKodeDepartemen();
            echo "<br>Nama Departemen: ".$this->getNamaDepartemen();
        }
    }