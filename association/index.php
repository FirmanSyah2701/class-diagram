<?php
    include_once('Mahasiswa.php');
    $mhs = new Mahasiswa();
    $mhs->setNim("1805041");
    $mhs->setNama("Firman Syah");
    $prodi = new Prodi();
    $prodi->setKode('1001');
    $prodi->setNamaProdi('D4 RPL');
    $mhs->showMahasiswa();
    echo "<br>";
    $prodi->showProdi();
?>