<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {

        public function __construct($b1, $b2) {
            // code..
        $this->bil1 = $b1;
        $this->bil2 = $b2;  
        }
        
        // Method lainnya
        public function getTambah() {
            return $this->bil1 + $this->bil2;
        }
        
        public function getKurang() {
            return $this->bil1 - $this->bil2;
        }
        
        public function getBagi() {
            return $this->bil1 / $this->bil2;
        }

        public function getKali() {
            return $this->bil1 * $this->bil2;
        }
    }

    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator(10, 5);

    echo "<br> Hasil Penjumlahan Bilangan = " . $calculator->getTambah();
    echo "<br> Hasil Pengurangan Bilangan = " . $calculator->getKurang();
    echo "<br> Hasil Pembagian Bilangan = " . $calculator->getBagi();
    echo "<br> Hasil Perkalian Bilangan = " . $calculator->getKali();

?>