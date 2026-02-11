<?php

class Belanja{
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBarang;
    public $totalBayar;
    public $diskon;

    public $pajak=0.02;
    public function __construct($namaPembeli, $namaBarang, $hargaBarang, $jumlahBarang, $diskon) {
        $this->namaPembeli = $namaPembeli;
        $this->namaBarang = $namaBarang;
        $this->hargaBarang = $hargaBarang;
        $this->jumlahBarang = $jumlahBarang;
        $this->diskon = $diskon;
    }

    public function totalHarga():float|int{
        $subtotal = $this->hargaBarang * $this->jumlahBarang;

        return $subtotal;
    }
}

$Belanja1 = new Belanja(namaPembeli: "jamal", namaBarang: "alat pemotong", hargaBarang: "5000", jumlahBarang: "2", diskon: "0.1");
$Belanja2 = new Belanja(namaPembeli: "siska", namaBarang: "alat pembersih", hargaBarang: "10000", jumlahBarang: "2", diskon: "0.1");

echo "<pre>";
echo "Nama Pembeli: " . $Belanja1->namaPembeli . "\n";
echo "Nama Barang: " . $Belanja1->namaBarang . "\n";
echo "Harga Barang: RP " . $Belanja1->hargaBarang . "\n";
echo "Jumlah Barang: RP " . $Belanja1->jumlahBarang . "<\n";
echo "Diskon: RP " . ($Belanja1->diskon * 100) . "<\n";
echo "subtotal: RP " . $Belanja1->totalHarga() . "\n";
echo "</pre>";


echo "<pre>";
echo "Nama Pembeli: " . $Belanja2->namaPembeli . "\n";
echo "Nama Barang: " . $Belanja2->namaBarang . "\n";
echo "Harga Barang: RP " . $Belanja2->hargaBarang . "\n";
echo "Jumlah Barang: RP " . $Belanja2->jumlahBarang . "<\n";
echo "Diskon: RP " . ($Belanja2->diskon * 100) . "<\n";
echo "subtotal: RP " . $Belanja2->totalHarga() . "\n";
echo "</pre>";

?>
