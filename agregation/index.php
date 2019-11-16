<?php
    include_once('Departemen.php');
    $departemen = new Departemen();
    $departemen->setKodeDepartemen('A4');
    $departemen->setNamaDepartemen('Polindra');
    $jurusan = new Jurusan();
    $jurusan->setKodeJurusan('B4');
    $jurusan->setNamaJurusan('Keperawatan');
    $departemen->showDepartemen();
    echo "<p>";
    $jurusan->showJurusan();
?>