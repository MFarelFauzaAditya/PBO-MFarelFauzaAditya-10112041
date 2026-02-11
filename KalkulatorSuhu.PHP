<?php

class KalkulatorSuhu {
    public $celsius;

    public function __construct($celsius) {
        $this->celsius = $celsius;
    }

    public function FAHRENHEIT() {
        return ($this->celsius * 9/5) + 32;
    }

    public function KELVIN() {
        return $this->celsius + 273.15;
    }

    public function tampilkanHasil() {
        echo "<pre>";
        echo "================ KALKULATOR SUHU =================\n";
        echo "Satuan    : Celsius (°C)\n";
        echo "--------------------------------------------------\n";
        echo "SUHU (C)   : " . $this->celsius . "\n";
        echo "FAHRENHEIT : " . $this->FAHRENHEIT() . "\n";
        echo "KELVIN     : " . $this->kELVIN() . "\n";
        echo "==================================================\n";
        echo "</pre>";
    }
}


$suhu = 30;


$kalkulator = new KalkulatorSuhu($suhu);
$kalkulator->tampilkanHasil();
?>