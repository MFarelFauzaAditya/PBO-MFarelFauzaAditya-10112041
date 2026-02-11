<?php

class KalkulatorSuhu {
    public $celsius;

    public function __construct($celsius) {
        $this->celsius = $celsius;
    }

    public function Farel() {
        return ($this->celsius * 9/5) + 32;
    }

    public function Miftah() {
        return $this->celsius + 273.15;
    }

    public function tampilkanHasil() {
        echo "<pre>";
        echo "================ KALKULATOR SUHU =================\n";
        echo "Satuan    : Celsius (°C)\n";
        echo "--------------------------------------------------\n";
        echo "SUHU (C)   : " . $this->celsius . "\n";
        echo "Farel : " . $this->Farel() . "\n";
        echo "Miftah     : " . $this->Miftah() . "\n";
        echo "==================================================\n";
        echo "</pre>";
    }
}


$suhu = 30;


$kalkulator = new KalkulatorSuhu($suhu);
$kalkulator->tampilkanHasil();
?>