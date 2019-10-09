<?php
    class Pakaian{
        var $nama_barang;
        var $merk;
        var $ukuran;

        function Beli(){
            return "Terima Kasih Sudah Membeli Produk Kami";
        }
    }

    $gucci = new Pakaian();
    $gucci->nama_barang = "Gucci Mane T-Shirt";
    $gucci->merk = "Gucci";
    $gucci->ukuran = "M";

    $bape = new Pakaian();
    $bape->nama_barang = "Bape Shark Hoodie";
    $bape->merk = "Bape";
    $bape->ukuran = "S";

    echo "Produk Pakaian yang dibeli : <br><br>
        Merk : $gucci->merk <br>
        Jenis Pakaian : $gucci->nama_barang<br>
        Ukuran : $gucci->ukuran";
    echo "<br><br>
        Merk : $bape->merk <br>
        Jenis Pakaian : $bape->nama_barang<br>
        Ukuran : $bape->ukuran <br>";
    echo $gucci->Beli();
?>