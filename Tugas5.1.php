<?php


$kartuMember = true;   
$totalBelanja = 334000;

$diskon = 0;


if ($kartuMember == true) {

    if ($totalBelanja > 100000) {
        $diskon = 15000;
    } else {
        if ($totalBelanja > 500000) {
            $diskon = 50000;
        }
    }

} else {

    if ($totalBelanja > 100000) {
        $diskon = 5000;
    }

}


$totalBayar = $totalBelanja - $diskon;


echo "Apakah ada kartu member: " . ($kartuMember ? "ya" : "tidak") . "\n";
echo "Total belanjaan: Rp " . $totalBelanja . "\n";
echo "Diskon: Rp " . $diskon . "\n";
echo "Total Bayar: Rp " . $totalBayar . "\n";

?>