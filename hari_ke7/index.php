<?php

// inisialisasi variabel perulangan;kondisi perulangan;penjumlahan/pengurangan
echo "<h3>perulangan For</h3>";
for ($i=0;$i<=5;$i++){
    echo "ini perulangan ke $i <br>";
}
echo "<hr>";
echo "<h3>perulangan While</h3>";
$a=0;
while($a<=1){
    echo "ini perulangan ke-$a <br>";
    $a++;
}
echo "<hr>";
echo "<h3>perulangan Do-While</h3>";
$x=0; 
do {
    echo "ini perulangan ke-$x <br>";
    $x ++;
} while ($x < 1);