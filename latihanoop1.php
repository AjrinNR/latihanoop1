<?php
    class rpl2{
        public $nama = "ujang";
        public $kls = "11";
        public $alamat = "marken";
        public $agama = "Islam";
        public $jurusan = "TKR";

        public function laki(){
            return "Laki Laki";
        }
        public function cw(){
            return "Perempuan";
        }
    }
    $rpl21 = new rpl2();
    echo"Nama : $rpl21->nama<br> Kelas : $rpl21->kls<br> Alamat : $rpl21->alamat<br> Agama : $rpl21->agama<br>
         Jurusan : $rpl21->jurusan <br> Jenis Kelamin : ". $rpl21->laki(). "<br><br>";
         
    $rpl22 = new rpl2();
    $rpl22->nama = "Encep";
    $rpl22->kls = "10";
    $rpl22->alamat = "Bumi Asri";
    $rpl22->agama = "islam";
    $rpl22->jurusan = "TSM";
    echo "Nama : $rpl22->nama <br>Kelas : $rpl22->kls<br> Alamat : $rpl22->alamat<br> Agama : $rpl22->agama<br>
         Jurusan : $rpl22->jurusan <br> Jenis Kelamin : ". $rpl22->laki(). "<br><br>";
         
    $rpl23 = new rpl2();
    $rpl23->nama = "Eneng";
    $rpl23->kls = "12";
    $rpl23->alamat = "Katapang";
    $rpl23->agama = "Islam";
    $rpl23->jurusan = "RPL";
    echo "Nama : $rpl23->nama<br> Kelas : $rpl23->kls<br> Alamat : $rpl23->alamat<br> Agama : $rpl23->agama<br>
         Jurusan : $rpl23->jurusan <br> Jenis Kelamin : ". $rpl23->cw(). "<br><br>";
?>