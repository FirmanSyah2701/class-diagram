<?php
    include_once('Trans.php');
    $trans = new Trans();
    $trans->setNoTrans('T01');
    $trans->setTotal('2');
    $trans->addTransDetail('A001',10);
    $trans->addTransDetail('B001',2);
    $trans->showTrans();
?>