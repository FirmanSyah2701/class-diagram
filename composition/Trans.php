<?php

include_once('TransDetail.php');

    class Trans{
        private $noTrans;
        private $total;
        private $td = array();

        public function setNoTrans($noTrans){
            $this->noTrans = $noTrans;
        }

        public function getNoTrans(){
            return $this->noTrans;
        }

        public function setTotal($total){
            $this->total = $total;
        }

        public function getTotal(){
            return $this->total;
        }

        public function addTransDetail($idProduk, $qty){
            $this->td[] = new TransDetail($idProduk, $qty);
        }

        public function getTd(){
            return $this->td;
        }

        public function showTrans(){
            echo "No Trans : ".$this->getNoTrans();
            echo "<br>Total : ".$this->getTotal();
            $td = $this->getTd();

            foreach($td as $t){
                echo "<br> Id Produk : ";
                echo $t->getIdProduk();
                echo "<br> Quantity : ";
                echo $t->getQty();
            }
            echo "<br>";  
        }
    }
?>