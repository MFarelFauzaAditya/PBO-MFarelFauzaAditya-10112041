<?php

class Belanja{
    public $namaKasir;
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBarang;
    public $totalBayar;
    public $diskon;
    public $uangBayar;

    public $pajak=0.02;


    public function totalHarga():float|int{
        $subtotal = $this->hargaBarang * $this->jumlahBarang;

        return $subtotal;
    }
}

$Belanja1 = new Belanja();
$Belanja1->namaKasir= "diaz";
$Belanja1->namaPembeli= "jamal";
$Belanja1->namaBarang= "alat pemotong";
$Belanja1->hargaBarang=5000;
$Belanja1->jumlahBarang=2;
$Belanja1->diskon=0.1;
$Belanja1->uangBayar=12000;
//var_dump(value: $Belanja1);


echo "<pre>";
echo "==========Toko Raden==========\n";
echo "Kasir: " . $Belanja1->namaKasir . "\n";
echo "Pembeli: " . $Belanja1->namaPembeli . "\n";
echo "------------------------------\n";
echo "Nama Barang: " . $Belanja1->namaBarang . "\n";
echo "------------------------------\n";
echo "subtotal: RP " . $Belanja1->totalHarga() . "\n";
echo "Diskon: RP " . ($Belanja1->totalHarga() * $Belanja1->diskon) . "<\n";
echo "Pajak: RP " . ($Belanja1->totalHarga() * $Belanja1->pajak) . "\n";
echo "------------------------------\n";
echo "Total Bayar: RP " . ($Belanja1->totalHarga() - ($Belanja1->totalHarga() * $Belanja1->diskon) + ($Belanja1->totalHarga() * $Belanja1->pajak)) . "\n";
echo "UangBayar: RP" . $Belanja1->uangBayar . "\n";
echo "Kembalian: RP" . ($Belanja1->uangBayar - ($Belanja1->totalHarga() - ($Belanja1->totalHarga() * $Belanja1->diskon) + ($Belanja1->totalHarga() * $Belanja1->diskon) + ($Belanja1->totalHarga() * $Belanja1->pajak))) . "\n";
echo "==============================\n";
echo "</pre>";


?>
