<?php

    class Handphone{
        var $nama_pembeli;
        protected $merk = "asus rog";
        private $hrg = 5500000;

    
        public function merk_hp() {
            return $this->merk;
        }
        public function tampilkan_hrg() {
            return $this->hrg;
        }
    }
    
    $hp = new Handphone();
    $hp1 = new Handphone();
    $hp2 = new Handphone();
    $hp->nama_pembeli = "Jajang";
    echo "Pembeli Hp : ". $hp->nama_pembeli . "<br> Merk Hp : ". $hp1->merk_hp(). "<br> Harga :  Rp." .
     $hp2->tampilkan_hrg();
?>    