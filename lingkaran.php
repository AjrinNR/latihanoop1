<?php 
    class Lingkaran{
        public $jari;
        public $fi;

        public function __construct($jari=0, $fi=3.14){
            $this->jari = $jari;
            $this->fi = $fi;
        }
        public function kel(){
            $kel = 2 * $this->fi *$this->jari;
            return $kel;
        }
        public function luas(){
            $luas = $this->fi * $this->jari * $this->jari;
            return $luas;
        }
    }
    $lingkaran1 = new Lingkaran(10);
    echo"Jari - Jari = ".$lingkaran1->jari. "<br>";
    echo"Keliling = {$lingkaran1->kel()}<br>";
    echo"Luas = {$lingkaran1->luas()}<br>";

?>