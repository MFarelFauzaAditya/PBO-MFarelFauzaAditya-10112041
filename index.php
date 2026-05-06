<?php

require_once "tagihanListrik.php";
require_once "tagihanRepositori.php";

/**
 * Fungsi untuk memformat angka ke format Rupiah.
 * Dideklarasikan hanya satu kali untuk menghindari Fatal Error.
 */
if (!function_exists('formatRupiah')) {
    function formatRupiah($angka) {
        return "Rp " . number_format($angka, 0, ',', '.');
    }
}

// Inisialisasi Repository
$repo = new tagihanRepositori();
$data = $repo->getAll();

echo "<h2>DATA TAGIHAN LISTRIK</h2>";

// Mulai Tabel
echo "<table border='1' cellpadding='6' cellspacing='0' style='border-collapse: collapse; width: 100%; max-width: 600px;'>";
echo "<thead>
        <tr style='background-color: #f2f2f2;'>
            <th>No</th>
            <th>Nama</th>
            <th>KWH</th>
            <th>Total Tagihan</th>
        </tr> </thead>";

echo "<tbody>";

$no = 1;

// Loop data dari repository
if (is_array($data)) {
    foreach ($data as $d) {
        // Buat objek baru untuk setiap baris data
        $obj = new tagihanListrik();
        
        // Mengisi data ke objek
        $obj->setData($d["nama"], $d["kwh"]);

        echo "<tr>";
        echo "<td align='center'>" . $no++ . "</td>";
        echo "<td>" . $obj->getNama() . "</td>";
        echo "<td align='center'>" . $obj->getKwh() . "</td>";
        echo "<td align='right'>" . formatRupiah($obj->hitungTotal()) . "</td>";
        echo "</tr>";
    }
}

echo "</tbody>";
echo "</table>";

?>