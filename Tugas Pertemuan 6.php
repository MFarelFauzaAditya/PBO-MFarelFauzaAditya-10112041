<?php
class BangunRuang {
    public $jenis, $sisi, $jariJari, $tinggi;

    public function __construct($j, $s, $r, $t) {
        $this->jenis = $j; $this->sisi = $s; $this->jariJari = $r; $this->tinggi = $t;
    }

    public function hitungVolume() {
        switch ($this->jenis) {
            case "Bola": return (4/3) * pi() * pow($this->jariJari, 3);
            case "Kerucut": return (1/3) * pi() * pow($this->jariJari, 2) * $this->tinggi;
            case "Limas Segi Empat": return (1/3) * pow($this->sisi, 2) * $this->tinggi;
            case "Kubus": return pow($this->sisi, 3);
            case "Tabung": return pi() * pow($this->jariJari, 2) * $this->tinggi;
            default: return 0;
        }
    }
}

$data = [
    new BangunRuang("Bola", 0, 7, 0),
    new BangunRuang("Kerucut", 0, 14, 10),
    new BangunRuang("Limas Segi Empat", 8, 0, 24),
    new BangunRuang("Kubus", 30, 0, 0),
    new BangunRuang("Tabung", 0, 7, 10)
];
?>

<table border="1" cellpadding="10" style="border-collapse: collapse; width: 100%; font-family: sans-serif;">
    <tr style="background-color: blue; color: white; text-align: center;">
        <th>Jenis Bangun Ruang</th>
        <th>Sisi</th>
        <th>Jari-jari</th>
        <th>Tinggi</th>
        <th>Volume</th>
    </tr>
    <?php foreach ($data as $row): ?>
    <tr style="text-align: center;">
        <td><?= $row->jenis ?></td>
        <td><?= $row->sisi ?></td>
        <td><?= $row->jariJari ?></td>
        <td><?= $row->tinggi ?></td>
        <td><?= $row->hitungVolume() ?></td>
    </tr>
    <?php endforeach; ?>
</table>