<?php

for($i=1900;$i<=2100;$i++){
    if(($i % 4 == 0 && $i % 100 !=0) || $i % 400 ==0){
        echo "$i ini tahun kabisat<br>";
    }
}