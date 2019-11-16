<?php

    include_once('Pelanggan.php');
    $plg = new Pelanggan();
    $plg->setNoPelanggan('09030015');
    $plg->setNama('Udin');
    $plg->setAlamat('Lohbener Lama No. 8');
    $plg->showPerson();
?>