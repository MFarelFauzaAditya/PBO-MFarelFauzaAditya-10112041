<?php

class Employee {
    public $nama;
    public $gajiPokok;
    public $masaKerja;

    public function __construct($n, $g, $m) {
        $this->nama = $n;
        $this->gajiPokok = $g;
        $this->masaKerja = $m;
    }
}


class Programmer extends Employee {
    public function hitungGaji() {
        $bonus = 0;
        if ($this->masaKerja >= 1 && $this->masaKerja <= 10) {
            $bonus = 0.01 * $this->masaKerja * $this->gajiPokok;
        } elseif ($this->masaKerja > 10) {
            $bonus = 0.02 * $this->masaKerja * $this->gajiPokok;
        }
        return $this->gajiPokok + $bonus;
    }
}


class Direktur extends Employee {
    public function hitungGaji() {
        $bonus = 0.5 * $this->masaKerja * $this->gajiPokok;
        $tunjangan = 0.1 * $this->masaKerja * $this->gajiPokok;
        return $this->gajiPokok + $bonus + $tunjangan;
    }
}


class PegawaiMingguan extends Employee {
    public $hargaBarang;
    public $stockTarget;
    public $terjual;

    public function __construct($n, $g, $h, $s, $t) {
        parent::__construct($n, $g, 0);
        $this->hargaBarang = $h;
        $this->stockTarget = $s;
        $this->terjual = $t;
    }

    public function hitungGaji() {
        if ($this->terjual > (0.7 * $this->stockTarget)) {
            $tambahan = 0.1 * $this->hargaBarang * $this->terjual;
        } else {
            $tambahan = 0.03 * $this->hargaBarang * $this->terjual;
        }
        return $this->gajiPokok + $tambahan;
    }
}


if (isset($_POST['hitung'])) {
    $jenis = $_POST['jenis'];
    $nama = $_POST['nama'];
    $gaji = $_POST['gaji'];

    if ($jenis == "1") {
        $p = new Programmer($nama, $gaji, $_POST['masa']);
        $hasil = $p->hitungGaji();
    } elseif ($jenis == "2") {
        $d = new Direktur($nama, $gaji, $_POST['masa']);
        $hasil = $d->hitungGaji();
    } else {
        $pm = new PegawaiMingguan($nama, $gaji, $_POST['harga'], $_POST['stok'], $_POST['terjual']);
        $hasil = $pm->hitungGaji();
    }
    echo "<h3>Total Gaji $nama: Rp " . number_format($hasil) . "</h3><hr>";
}
?>

<form method="POST">
    <p>Nama: <input type="text" name="nama" required></p>
    <p>Gaji Pokok: <input type="number" name="gaji" required></p>
    <p>Jenis Pegawai: 
        <select name="jenis">
            <option value="1">Programmer</option>
            <option value="2">Direktur</option>
            <option value="3">Pegawai Mingguan</option>
        </select>
    </p>
    <p>Masa Kerja (isi jika Prog/Dir): <input type="number" name="masa" value="0"></p>
    <p>--- Khusus Pegawai Mingguan ---</p>
    <p>Harga Barang: <input type="number" name="harga" value="0"></p>
    <p>Stok Harus Terjual: <input type="number" name="stok" value="0"></p>
    <p>Total Terjual: <input type="number" name="terjual" value="0"></p>
    <button type="submit" name="hitung">Hitung</button>
</form>