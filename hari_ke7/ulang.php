<?php

echo "<h3>perulangan dari 100 ke 1</h3>";
for ($i=100;$i>=1;$i--){
    echo "ini perulangan ke $i <br>";
}
echo "<hr>";
echo "<h3>perulangan bilangan ganjil dari 1 ke 100</h3>";
for ($i=1;$i<=100;$i++){
    if($i%2==1){
        echo "$i <br>";
    }
}