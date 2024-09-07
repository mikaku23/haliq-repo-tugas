<?php

$nama=$_POST['user'];
$kelas = isset($_POST['kelas']) ? $_POST['kelas'] : '';
$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';
$umur = isset($_POST['umur']) ? $_POST['umur'] : '';

if ($kelas && $jenis && $umur) {
    echo "Nama: $nama <br> Kelas: $kelas <br> Jenis kelamin: $jenis <br> Umur: $umur"; "<br>";
}
elseif ($kelas && $jenis) {
    echo "Nama: $nama <br> Kelas: $kelas <br> Jenis kelamin: $jenis <br> Umur: -"; "<br>";
} 
elseif ($kelas && $umur) {
    echo "Nama: $nama <br> Kelas: $kelas <br> Jenis kelamin: - <br> Umur: $umur"; "<br>";
} 
elseif ($umur && $jenis) {
    echo "Nama: $nama <br> Kelas: - <br> Jenis kelamin: $jenis <br> Umur: $umur"; "<br>";
} 
elseif ($kelas) {
    echo "Nama: $nama <br> Kelas: $kelas <br> Jenis kelamin: - <br> Umur: -"; "<br>";
} 
elseif ($jenis) {
    echo "Nama: $nama <br> Kelas: - <br> Jenis kelamin: $jenis <br> Umur: -" ;"<br>";
}
elseif ($umur) {
    echo "Nama: $nama <br> Kelas: - <br> Jenis kelamin: - <br> Umur: $umur" ;"<br>";
} 
else {
    echo "Nama: $nama <br> Kelas: - <br> Jenis kelamin: - <br> Umur: - <br>";
}