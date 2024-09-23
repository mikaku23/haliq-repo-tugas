<?php

$angka=array(17,5,9,12,84,4,76,98);


foreach ($angka as $bilangan) {
  if($bilangan % 2 ==1){
    echo $bilangan.'<br>';
  }
}

echo "<hr>";

// $jumlah=array_sum($angka);
// echo "jumlah seluruh array adalah $jumlah";

$jumlah=0;
foreach($angka as $bil){
    $jumlah=$jumlah+$bil;
}

echo $jumlah;

echo "<hr>";

$angka=array(17,5,9,12,84,4,76,98);
sort($angka);

foreach ($angka as $c){
    echo $c. '<br>';
}


