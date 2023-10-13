<?php
class Mobil{
    public $nama, $merk, $warna, $kecepatanMaksimal, $jumlahPenumpang;

    public function tambahKecepatan(){
        return "Kecepatan Bertambah!";
    }
}

class MobilSport extends Mobil{
    public $turbo = false;

    public function jalankanTurbo(){
        $this->turbo = true;
        return "Turbo telah diaktifkan!";
    }

}

$mobilSport1 = new MobilSport();
echo $mobilSport1->tambahKecepatan();
echo "<br>";
echo $mobilSport1->jalankanTurbo();
?>