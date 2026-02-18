<?php

class produk {
    public $jumlah;
    public $bunga;
    public $lama;
    public $keterlambatan;
    public function hitungAngsuran() {
       $Angsuran = ($this->jumlah + ($this->jumlah * $this->bunga / 100)) / $this->lama;
       if ($this->keterlambatan > 0) {
            $denda = $Angsuran * 0.0015 * $this->keterlambatan;
            $Angsuran += $denda;
        }
    }

}

$produk1 = new produk();

    $produk1->jumlah = $_POST['jumlah'];
    $produk1->bunga = $_POST['bunga'];
    $produk1->lama = $_POST['lama'];
    $produk1->keterlambatan = $_POST['keterlambatan'];

   ;
echo "Besar Pinjaman : Rp " . $_POST['jumlah'] . "";
echo "Besar Bunga : " . $_POST['bunga'] . "%";
echo "Lama Angsuran : " . $_POST['lama'] . " bulan";
echo "Keterlambatan Angsuran : " . $_POST['keterlambatan'] . " hari";
echo "Besaran Pembayaran : Rp " . number_format($produk1->hitungAngsuran(), 2, ',', '.') . "";

?>