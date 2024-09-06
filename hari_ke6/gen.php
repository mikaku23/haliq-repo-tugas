<?php

$jumlahjamkerja=47;
$jamnormal=48;
$selisih=$jumlahjamkerja-$jamnormal;

if($jumlahjamkerja>0){
    $upah=($selisih*3000)+(2000*48);
}
else{
    $upah=($jumlahjamkerja*2000);
}

echo $upah;