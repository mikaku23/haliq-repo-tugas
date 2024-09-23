<?php

// $data=array("Andi"=> 67345345,"Budi"=> 76245345, "Candra"=> 89345345);
// foreach ($data as $y => $z){
//     echo "$y-$z". '<br>';
// }

$datasiswa=array(
    array("nama"=> "Andi", "nisn"=> 67345345),
    array("nama"=> "Budi", "nisn"=> 76245345),
    array("nama"=> "Candra", "nisn"=> 89345345)
);

foreach ($datasiswa as $siswa){
echo $siswa ['nama']."-" .$siswa['nisn']."<br>";
}