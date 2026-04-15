<?php

class Karyawan {
    public $nama;
    public $golongan;
    public $jamLembur;
    private $gajiPokok;

    // 5. Constructor dengan parameter
    public function __construct($nama, $golongan, $jamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
        $this->setGajiPokok();
    }

    // 1. Method untuk menentukan gaji pokok
    private function setGajiPokok() {
        $daftarGaji = [
            "Ib" => 1250000, "Ic" => 1300000, "Id" => 1350000,
            "IIa" => 2000000, "IIb" => 2100000, "IIc" => 2200000, "IId" => 2300000,
            "IIIa" => 2400000, "IIIb" => 2500000, "IIIc" => 2600000, "IIId" => 2700000,
            "IVa" => 2800000, "IVb" => 2900000, "IVc" => 3000000, "IVd" => 3100000
        ];
        $this->gajiPokok = $daftarGaji[$this->golongan] ?? 0;
    }

    public function hitungTotalGaji() {
        $totalLembur = $this->jamLembur * 15000;
        return $this->gajiPokok + $totalLembur;
    }

    // 7. Destructor
    public function __destruct() {
        // Objek dihapus dari memori
    }
}

// 4. Array untuk menampung data (Database)
$database = [
    new Karyawan("Winny", "IIb", 30),
    new Karyawan("Stendy", "IIIc", 32),
    new Karyawan("Alfred", "IVb", 30)
];

// Perulangan agar menu terus muncul (Poin 3)
while (true) {
    echo "\n===== MENU GAJI KARYAWAN =====\n";
    echo "1. Tampilkan Data (Read)\n";
    echo "2. Tambah Data (Create)\n";
    echo "3. Update Data (Update)\n";
    echo "4. Hapus Data (Delete)\n";
    echo "5. Keluar\n";
    echo "Pilih menu: ";
    
    $pilihan = trim(fgets(STDIN));

    if ($pilihan == "1") {
        // --- READ ---
        echo "\n===== DATA GAJI KARYAWAN =====\n";
        echo "No | Nama | Golongan | Jam Lembur | Total Gaji\n";
        foreach ($database as $key => $karyawan) {
            $totalGaji = "Rp" . number_format($karyawan->hitungTotalGaji(), 0, ',', ',');
            echo ($key + 1) . " | {$karyawan->nama} | {$karyawan->golongan} | {$karyawan->jamLembur} | $totalGaji\n";
        }

    } elseif ($pilihan == "2") {
        // --- CREATE ---
        echo "Nama: "; $nama = trim(fgets(STDIN));
        echo "Golongan (Ib-IVd): "; $gol = trim(fgets(STDIN));
        echo "Jam Lembur: "; $lembur = trim(fgets(STDIN));
        
        $database[] = new Karyawan($nama, $gol, (int)$lembur);
        echo "Data berhasil ditambahkan!\n";

    } elseif ($pilihan == "3") {
        // --- UPDATE ---
        echo "Masukkan nomor data yang akan diupdate: ";
        $idx = (int)trim(fgets(STDIN)) - 1;
        if (isset($database[$idx])) {
            echo "Nama Baru: "; $database[$idx]->nama = trim(fgets(STDIN));
            echo "Golongan Baru: "; $database[$idx]->golongan = trim(fgets(STDIN));
            echo "Jam Lembur Baru: "; $database[$idx]->jamLembur = (int)trim(fgets(STDIN));
            echo "Data berhasil diperbarui!\n";
        } else {
            echo "Data tidak ditemukan!\n";
        }

    } elseif ($pilihan == "4") {
        // --- DELETE ---
        echo "Masukkan nomor data yang akan dihapus: ";
        $idx = (int)trim(fgets(STDIN)) - 1;
        if (isset($database[$idx])) {
            // 7. Menggunakan unset untuk menghapus objek
            unset($database[$idx]);
            $database = array_values($database); // Reset index array
            echo "Data berhasil dihapus!\n";
        } else {
            echo "Data tidak ditemukan!\n";
        }

    } elseif ($pilihan == "5") {
        echo "Keluar dari program...\n";
        break;
    } else {
        echo "Pilihan tidak valid!\n";
    }
}