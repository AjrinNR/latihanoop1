<?php  
    class OrangTua{
        public $ayah;
        public $ibu = "Aan";

        public function __construct($ayah = "abdul"){
            $this->ayah = $ayah;
            echo "Nama Ayah saya : $ayah<br>";
        }
        public function __destruct(){
            echo "Nama Ibu saya :".$this->ibu."<br>";
        }
    }
    class Anak extends OrangTua{
        public $anak;
        public function halo(){
            return "Halo Nama saya  : $this->anak <br>";
        }
    }

    $hamd = new Anak();
    $hamd->anak="Ahmed";
    echo $hamd->halo();


//parent::__construct(); untuk memanggil construct    
?>