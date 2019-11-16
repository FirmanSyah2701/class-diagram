<?php

    class TransDetail{
        private $idProduk;
        private $qty;
        private $subTotal;

        public function __construct($idProduk, $qty){
            $this->idProduk = $idProduk;
            $this->qty = $qty;
        }

        public function setIdProduk($idProduk){
            $this->idProduk = $idProduk;
        }

        public function getIdProduk(){
            return $this->idProduk;
        }

        public function setQty($qty){
            $this->qty = $qty;
        }

        public function getQty(){
            return $this->qty;
        }

        public function setSubTotal($subTotal){
            $this->subTotal = $subTotal;
        }

        public function getSubTotal(){
            return $this->subTotal;
        }

        public function showTransDetail(){
            echo "Id Produk : ".$this->getIdProduk();
            echo "<br>Qty : ".$this->getQty();
            echo "<br>Sub Total : ".$this->getSubTotal();
        }
    }