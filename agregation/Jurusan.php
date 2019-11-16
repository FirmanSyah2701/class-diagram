<?php
    class Jurusan{

        private $kodeJurusan;
        private $namaJurusan;

        public function setKodeJurusan($kodeJurusan){
            $this->kodeJurusan = $kodeJurusan;
        }

        public function getKodeJurusan(){
            return $this->kodeJurusan;
        }

        public function setNamaJurusan($namaJurusan){
            $this->namaJurusan = $namaJurusan;
        }

        public function getNamaJurusan(){
            return $this->namaJurusan;
        }

        public function showJurusan(){
            echo "Kode Jurusan: ".$this->getKodeJurusan();
            echo "<br>Nama Jurusan: ".$this->getNamaJurusan();
        }
    }