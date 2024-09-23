<?php
// index array

$nama=array("dedi","andi","budi","candra","emon",);
echo $nama[3];// untuk menampilkan urutan ke 3 //

echo "<hr>";

foreach ($nama as $n){  // untuk menampilkan semua data di $nama //
    echo $n. '<br>';
}

echo "<hr>";

$nama[4]="hafif"; // untuk mengganti Emon menjadi hapip // 
foreach ($nama as $n){  
echo $n. '<br>';}

echo "<hr>";
// index array //

// Associative Array

$hp = array("brand"=>"Redmi", "model"=>"Renot 14", "year"=>1964);
$hp["year"] = 2024; // untuk mengganti year menjadi 2024 //
echo $hp ["brand"]. '<br>'; 

foreach ($hp as $label => $data) {
  echo "$label: $data <br>";
}
echo "<hr>";
// Associative Array //

// Add Array Items
// untuk menambahkan item label dan data baru ke dalam variabel $hp //
$hp = array("brand"=>"Redmi", "model"=>"Renot 14", "year"=>1964);
$hp["color"]= "red";

foreach ($hp as $label => $data) {
  echo "$label: $data <br>";
}
echo "<br>";

// untuk menambahkan item data menggunakan array_push //
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");

foreach ($fruits as $data) {
  echo "$data <br>";
}

echo "<br>";

// untuk menambahkan berbagai item label dan data menggunakan += //
$hp = array("brand"=>"Redmi", "model"=>"Renot 14");
$hp += ["color" => "red", "year" => 1964];

foreach ($hp as $label => $data) {
  echo "$label:$data <br>";
}
// Add Array Items //