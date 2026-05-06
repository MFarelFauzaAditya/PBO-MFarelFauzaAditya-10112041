<<?php

class tagihanListrik {

    private $nama;
    private $Kwh;
    private $tarif = 1500;

    // Mengatur data nama dan jumlah kwh
    public function setData($nama, $kwh){
        $this->nama = $nama;
        $this->Kwh = $kwh;
    }

    // Mengambil data nama
    public function getNama(){
        return $this->nama;
    }

    // Mengambil data kwh (Baru)
    public function getKwh(){
        return $this->Kwh;
    }

    // Menghitung total tagihan dengan logika diskon terbaru
    public function hitungTotal(){

        $total = $this->Kwh * $this->tarif;

        // Jika pemakaian lebih dari 1000 kWh, potong 50.000
        if($this->Kwh > 1000){
            $total -= 50000; 
        }

        return $total;
    }
}
?>