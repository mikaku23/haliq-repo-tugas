<?php

// $nip = "198203122009042001";
// $info = info_nip($nip);


function ekstrakNIP($nip) {

    $tahun = substr($nip, 0, 4);
    $bulan = substr($nip, 4, 2);
    $tanggal = substr($nip, 6, 2);
    $jk = substr($nip, 14, 1);

    $date = date_create ($tanggal."-".$bulan."-".$tahun);

    $data['tanggal']=date_format($date,"d F Y");

    if($jk ==1){
        $data['jk']="Laki-Laki";
    }
    else{
        $data['jk']="Perempuan";
    }

    $tanggalPensiun="01";
    $bulanPensiun=$bulan+1;
    $tahunPensiun=$tahun+60;
    $pensiun=date_create($tanggalPensiun.'-'.$bulanPensiun.'-'.$tahunPensiun);
    $data['pensiun']=date_format($pensiun, 'd F Y');
    
return $data;
}

$dataEkstrak= ekstrakNIP($_POST['nip']);
foreach ($dataEkstrak as $dt){
    echo $dt."<br>";
}
// echo "Tanggal Lahir: " . $info['tanggal_lahir'] . "\n<br>";
// echo "Jenis Kelamin: " . $info['jenis_kelamin'] . "\n<br>";
// echo "Pensiun: " . $info['pensiun'] . "\n<br>";

?>
