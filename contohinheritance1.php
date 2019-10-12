<?php
    class Mobil{
        public function __construct(){
            echo "Keluar Rumah <br>";
        }
        public function __destruct(){
            echo "Keluar Mobil <br>";
        }
    }
    class Rumah extends Mobil{
        public function __construct(){
            parent::__construct();
            echo "Masuk Mobil <br>";
        }
        public function mengemudi(){
            echo"Mengemudi Mobil<br>";
        }
        public function __destruct(){
            parent::__destruct();
            echo "Main <br>";
            
        }
    }
    $lambo = new Rumah();
    echo $lambo->mengemudi();
    

?>