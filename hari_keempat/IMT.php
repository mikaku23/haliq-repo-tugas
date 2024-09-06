<?php


$berat=51;
$tinggi=1.63; 

$IMT=$berat/($tinggi*$tinggi);
$IMT= substr((string)$IMT, 0, 2);
$IMT=60;

if($IMT< 18.5){
    $keterangan="Kurus";
}
elseif($IMT <25){
    $keterangan="Normal";
}
elseif($IMT <30){
    $keterangan="Overweight";
}
else{
    $keterangan="Obesitas";
}

$kategori="$IMT:$keterangan";
echo $kategori;