<?php
// 1.class adalah sebuah blueprint/template untuk membuat instance dari object
// 2.class mendifinisikan objek
// 3.class menyimpan data(property) dan prilaku(method)
   //membuat class dengan nama kadal
    class kadal{ 
        // membuat property
        public $warna = "hitam manis";
        public $jml_kaki = 4;
        public $daharen = "jukut";

        //membuat method dengan nama bersuara

        public function bersuara(){
            return "gggraaahhh";
        }
    }

    //membuat objek baru
    //objek ditandai dengan keyword new
    $kadal1 = new kadal();
    //var_dump($kadal1);
    echo "Warna kadal; $kadal1->warna <br>";
    echo "Suara kadal; " . $kadal1->bersuara();


?>