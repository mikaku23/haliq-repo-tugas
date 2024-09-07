<!-- buatkan untuk menentukan tahun kabisat atau tidak -->
<?php
$tahun=1000;

if(($tahun % 4 == 0 && $tahun % 100 !=0) || $tahun % 400 ==0){
$ket= "adalah tahun kabisat";
}
else{
$ket= "bukan tahun kabisat";
}

echo "<hr>tahun $tahun $ket ";