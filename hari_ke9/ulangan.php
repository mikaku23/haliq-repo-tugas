<?php

$usia=65;

if($usia>=0 && $usia <=12){
    $ket="Anak-Anak";
}
elseif($usia>=13 && $usia <=17){
    $ket="Remaja";
}
elseif($usia>=18 && $usia <=59){
    $ket="Dewasa";
}
elseif($usia>=60){
    $ket="Lansia";
}
else{
    $ket="Tidak diketahui";
}

echo "Usia anda $usia, Anda termasuk dalam kategori $ket";