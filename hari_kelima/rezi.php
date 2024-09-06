<?php
$tahun=2012;

if(($tahun % 4 == 0 && $tahun % 100 !=0) || $tahun % 400 ==0){
echo "tahun $tahun adalah tahun kabisat";

}else{
echo "tahun $tahun bukan tahun kabisat";
}

