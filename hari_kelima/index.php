<html>
    <head>
        <title>
            hari kelima
</title>

</head>
    <style>
        body{
            background: linear-gradient(to bottom right, black, rgb(21, 21, 48), rgb(164, 164, 240));
            color: white;
            font-size:50px;
        }
        </style>
        <body>
            <body>
</html>

<?php
// percabangan
$bulanke=2;
echo "<center>";
switch ($bulanke){
    case 1:
        echo"Januari";
        break;
    case 2:
        echo"Februari";
        break;
    case 3:
        echo"Maret";
        break;
    case 4:
        echo"April";
        break;
    case 5:
        echo"Mei";
        break;
    case 6:
        echo"Juni";
        break;
    case 7:
        echo"Juli";
        break;
    case 8:
        echo"Agustus";
        break;
    case 9:
        echo"September";
        break;
    case 10:
        echo"Oktober";
        break;
    case 11:
        echo"November";
        break;
    case 12:
        echo"Desember";
        break;
    default:
        echo "Tidak Terdaftar";
}