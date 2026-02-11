<?php

class Belanja{
    public $namaPembeli="jamal";
    public $namaBarang="Alat pemotong";
    public $hargaBarang=5000;
    public $jumlahBarang=2;
    public $totalBayar;
    public $diskon=0.1;

    public static $pajak=0.02;


    public function totalHarga():float|int{
        $subtotal = $this->hargaBarang * $this->jumlahBarang;

        return $subtotal;
    }
}

$Belanja1 = new Belanja();
//var_dump(value: $Belanja1);

echo "subtotal: RP " . $Belanja1->totalHarga() . "<br>";
echo "Diskon: RP " . ($Belanja1->totalHarga() * $Belanja1->diskon);
?>
