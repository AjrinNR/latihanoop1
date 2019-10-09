<?php
  
// buat class laptop
    class laptop {
    
       // buat property untuk class laptop
       public $pemilik;
       public $merk;
       public $ukuran_layar;
    
       // buat method untuk class laptop
       public function hidupkan_laptop() {
         return "Hidupkan Laptop";
       }

       public function matikan_laptop() {
         return "Matikan Laptop";
       }
    }
    
    // buat objek dari class laptop (instansiasi)
    $laptop_anto = new laptop();
    $laptop_andi = new laptop();
    $laptop_anto->pemilik = "Anto";
    $laptop_andi->pemilik = "Andi";
    echo $laptop_anto->pemilik; // "Anto"
?>