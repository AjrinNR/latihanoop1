<?php 
    class Karyawan{
        public $nama;
        public $pekerjaan;
        public $tahun_bekerja;
        protected $gaji;
        private $gjmanager = 5000000;
        private $gjsekertaris = 2000000;
        private $gjob = 500000;

        public function setdata($nama, $pekerjaan, $tahun_bekerja){
            $this->nama=$nama;
            $this->pekerjaan=$pekerjaan;
            $this->tahun_bekerja=$tahun_bekerja;
        }
        public function getdata(){
            if (($this->pekerjaan == "Manager")&&($this->tahun_bekerja >=10)) {
                $this->gaji = $this->tahun_bekerja*$this->gjmanager;
            }
            elseif (($this->pekerjaan == "Sekertaris")&&($this->tahun_bekerja>=10)) {
                $this->gaji = $this->tahun_bekerja*$this->gjsekertaris;
            }
            elseif (($this->pekerjaan == "OB")&&($this->tahun_bekerja>=10)) {
                $this->gaji = $this->tahun_bekerja*$this->gjob;
            }
            elseif (($this->pekerjaan == "Manager")&&($this->tahun_bekerja>=5)) {
                $this->gaji = $this->tahun_bekerja*($this->gjmanager-1000000);
            }
            elseif (($this->pekerjaan == "Sekertaris")&&($this->tahun_bekerja>=5)) {
                $this->gaji = $this->tahun_bekerja*($this->gjsekertaris-500000);
            }
            elseif (($this->pekerjaan == "OB")&&($this->tahun_bekerja>=5)) {
                $this->gaji = $this->tahun_bekerja*($this->gjob-100000);
            }
            return $this->gaji;
        }
    }
    $karyawan = new Karyawan();
    $karyawan->setdata("Aceng","Manager",10);

    $karyawan2 = new Karyawan();
    $karyawan2->setdata("Toni","OB",5);

    $karyawan3 = new Karyawan();
    $karyawan3->setdata("Eneng","Sekertaris",10);

    echo "Nama : $karyawan->nama <br>";
    echo "Pekerjaan : $karyawan->pekerjaan <br>";
    echo "Nama : $karyawan->tahun_bekerja <br>";
    echo "Gaji : ".number_format($karyawan->getdata(),0,",",".")."<br><br><br>";

    echo "Nama : $karyawan2->nama <br>";
    echo "Pekerjaan : $karyawan2->pekerjaan <br>";
    echo "Nama : $karyawan2->tahun_bekerja <br>";
    echo "Gaji : ".number_format($karyawan2->getdata(),0,",",".")."<br><br><br>";

    echo "Nama : $karyawan3->nama <br>";
    echo "Pekerjaan : $karyawan3->pekerjaan <br>";
    echo "Nama : $karyawan3->tahun_bekerja <br>";
    echo "Gaji : ".number_format($karyawan3->getdata(),0,",",".")."<br><br><br>";
?>