<?php
echo "masukkan username : ";
$input_name = fopen("php://stdin", "r");
$username = trim(fgets($input_name));
echo "welcome $username, apa kabar?\n";
?>