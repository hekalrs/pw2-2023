<?php

    /*
         
    */
    echo $_SERVER["DOCUMENT_ROOT"];

    /*
    Variable User
    Variable yang dibuat user
    */
    echo '<br></br>';

    $name = 'Rul';
    $age = 15;
    $weight = 50.5;

    echo "Nama saya adalah " . $name;


    /*Variable Konstan
    Variable yang tidak bisa diubah nilainya
    1. Menggunakan define()         | define('fruit', 'apel');
    2. Mengunakan ConST             | const fruit = 'Apel';
    */
    echo '<br></br>';

    define("SITE_NAME", "Elena");
    const BASE_URL = "elena.nurulfikri.ac.id";

    echo SITE_NAME;
    echo '<br>';
    echo BASE_URL;
?>