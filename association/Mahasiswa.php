<?php
include_once('Prodi.php');
    class Mahasiswa{
        private $nim;
        private $nama;
        private $prodi = array();

        public function setNim($nim){
            $this->nim = $nim;
        }

        public function setNama($nama){
            $this->nama = $nama;
        }

        public function getNim(){
            return $this->nim;
        }

        public function getNama(){
            return $this->nama;
        }

        public function getProdi(){
            return $this->prodi;
        }

        public function showMahasiswa(){
            echo "Nim : ".$this->getNim();
            echo "<br>Nama : ".$this->getNama();
            echo "<br>";
            $prodi = $this->getProdi();

            foreach ($prodi as $p) {
                echo $p->getKode();
                echo "<br>";
                echo $p->getNamaProdi();
            }
            echo "<br>";
        }
    }
?>