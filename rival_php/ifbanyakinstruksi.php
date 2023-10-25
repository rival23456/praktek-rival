<?php
$panjang = 20;
$lebar = 10;
$tinggi = 5;

$volume = $panjang * $lebar * $tinggi;
$vmaks = 300;

if ($volume > $lebar){ 
    echo  "$panjang = $panjang <br>";
    echo  "$lebar = $tinggi<br>";
    echo  "$tinggi = $tinggi <br>";
    echo  "volume maksimal = $vmaks <br>";
    echo  "volume lebih besar dari $vmaks <br>";
}
echo "volume lebih kecil dari $vmaks <br>";
?>