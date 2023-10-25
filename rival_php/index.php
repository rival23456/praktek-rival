<?php
$panjang = 20;
$lebar = 10;
$tinggi = 5;

$volume = $panjang * $lebar * $tinggi;
$vmaks = 300;

if ($volume > $vmaks)
echo "volume lebih besar dari $vmaks";
