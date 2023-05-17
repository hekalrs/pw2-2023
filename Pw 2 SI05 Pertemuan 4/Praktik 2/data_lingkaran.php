<?php

    require_once 'class_lingkaran.php';
    echo 'Nilai PHI = ' . Linkaran::PHI;

    $linkar1 = new Linkaran(7);
    $linkar2 = new Linkaran(15);

    echo "<br> Luas Lingkaran 1 = " . $linkar1->getLuas();
    echo "<br> Luas Lingkaran 2 = " . $linkar2->getLuas(); 
    echo "<br> Kel Lingkaran 1 = " . $linkar1->getKel();
    echo "<br> Kel Lingkaran 2 = " . $linkar2->getkel();

?>