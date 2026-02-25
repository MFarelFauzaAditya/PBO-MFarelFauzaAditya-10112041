<?php

class mahasiswa {
    public $nama;
    public $kelas;
    public $matkul;
    public $nilai;
    public $status;
}
$mahasiswa = [
    [
        "nama" => "Aditya",
        "kelas" => "SI 2",
        "matkul" => "Pemrograman Berorientasi Objek",
        "nilai" => 80,
        "status" => "Lulus Kuis"
    ],
    [
        "nama" => "Shinta",
        "kelas" => "SI 2",
        "matkul" => "Pemrograman Berorientasi Objek",
        "nilai" => 75,
        "status" => "Lulus Kuis"
    ],
    [
        "nama" => "Ineu",
        "kelas" => "SI 2",
        "matkul" => "Pemrograman Berorientasi Objek",
        "nilai" => 55,
        "status" => "Tidak Lulus Kuis"
    ]
];

echo "<h2>Data Nilai Mahasiswa</h2>";
echo "<hr>";


echo "Nama: " . $mahasiswa[0]['nama'] . "<br>";
echo "Kelas: " . $mahasiswa[0]['kelas'] . "<br>";
echo "Mata Kuliah: " . $mahasiswa[0]['matkul'] . "<br>";
echo "Nilai: " . $mahasiswa[0]['nilai'] . "<br>";
echo $mahasiswa[0]['status'] . "<br>";
echo "<hr>";


echo "Nama: " . $mahasiswa[1]['nama'] . "<br>";
echo "Kelas: " . $mahasiswa[1]['kelas'] . "<br>";
echo "Mata Kuliah: " . $mahasiswa[1]['matkul'] . "<br>";
echo "Nilai: " . $mahasiswa[1]['nilai'] . "<br>";
echo $mahasiswa[1]['status'] . "<br>";
echo "<hr>";


echo "Nama: " . $mahasiswa[2]['nama'] . "<br>";
echo "Kelas: " . $mahasiswa[2]['kelas'] . "<br>";
echo "Mata Kuliah: " . $mahasiswa[2]['matkul'] . "<br>";
echo "Nilai: " . $mahasiswa[2]['nilai'] . "<br>";
echo $mahasiswa[2]['status'] . "<br>";
echo "<hr>";
?>
