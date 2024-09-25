<?php

$data=array(
    array("nama"=>"persegi1","panjang"=>56,"lebar"=>23),
    array("nama"=>"persegi2","panjang"=>33,"lebar"=>21),
    array("nama"=>"persegi3","panjang"=>65,"lebar"=>42),
    array("nama"=>"persegi4","panjang"=>73,"lebar"=>29)
);
foreach($data as $dt=>$persegi){
    $data[$dt]["luas"]=$data[$dt]["panjang"]*$data[$dt]["lebar"];
}

// $data[0]["luas"]=$data[0]["panjang"]*$data[0]["lebar"];

$jsonData=json_encode($data,JSON_PRETTY_PRINT);
echo "<pre>".$jsonData."</pre>";

// $data ["luas"]
// foreach ($data as $nilai){
//     $luas= $nilai["panjang"]*$nilai["lebar"]."<br>";
//     echo $nilai["nama"]." luasnya: ".$luas;
// }  
// $nilai["luas"]="1288,";
// $jsonData=json_encode($nilai,JSON_PRETTY_PRINT);
// echo "<pre>".$jsonData."</pre>";
    