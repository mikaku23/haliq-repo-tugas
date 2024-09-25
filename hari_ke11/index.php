<?php
// function tanpa argumen
function pesan(){
    echo "selamat ngoding";
    echo "<br>";
}

pesan();
pesan();
echo "<br>";

 function ageCount($nama,$tahun){
$umur=date("Y")-$tahun;
echo "Hai $nama, umur kamu $umur tahun <br>";
}
ageCount("Andi",2009);
ageCount("Budi",2001);
echo "<br>";

// function dengan 3 argumen
function tree($nama,$kelas,$jurusan){
    echo "Hai $nama, kamu kelas $kelas, jurusan $jurusan";
    echo "<br>";
}

tree("haliq","XI RPL 1","RPL");
tree("sudi","XI RPL 2","RPL");
echo "<br>";

// function yang mengembalikan nilai (return value)!
function nilai($bil1,$bil2,$bil3,$bil4){
    return $bil1+$bil2*$bil3-$bil4;
}
$hasil= nilai(4,3,28,65);    