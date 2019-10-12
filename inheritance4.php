<?php 
    class Komputer{
        public $processor = "Intel Core I7";
        public function __construct(){
            echo "Construct dari Komputer<br>";
        }
        public function __destruct(){
            echo "Destruct dari Komputer <br>";
        }
    }
    class laptop extends Komputer{
        public function __construct(){
            parent::__construct();
            echo "Construct dari Laptop<br>";
        }
        public function spesifikasi(){
            echo"Spesifikasi Laptop : ";
        }
        public function __destruct(){
            echo "Destruct dari Laptop <br>";
            parent::__destruct();
        }
    }
    $asus = new Laptop();
    $asus->spesifikasi();
    echo $asus->processor."<br>";
?>