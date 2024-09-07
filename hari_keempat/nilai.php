<?php

$nilai=59;

if($nilai>=90 && $nilai<=100){
    $predikat= "A";
}
elseif($nilai>=80 && $nilai<90){
    $predikat= "B";
}
elseif($nilai>=70 && $nilai<80){
    $predikat= "C";
}
elseif($nilai>=60 && $nilai<70){
    $predikat= "D";
}
else{
    $predikat= "E";
}

$hasil="$nilai:$predikat";
echo "Predikat dengan nilai $nilai adalah $predikat";