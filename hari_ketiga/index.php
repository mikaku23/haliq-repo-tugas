<?php

// operator bilangan aritmatika
echo "<i>operator aritmatika</i><br><br>";
print "(%)<br>";

$bilangan1=15;
$bilangan2=2;

$sisaHasilBagi=$bilangan1%$bilangan2;

echo $bilangan1. " % ".$bilangan2."=".$sisaHasilBagi ;
print " <br><b>(%=sisa hasil bagi)</b> ";

echo "<br><br>";
print "(+ -)<br>";

$a=1000;
$b=500;
$hasil=$a-$b;
echo $a. " - ".$b."=".$hasil;

echo "<br>";
$a=1000;
$b=500;
$hasil=$b+$a;
echo $a. " + ".$b."=".$hasil;

echo "<br><br>";
print "(* /)<br>";

$a=5;
$b=10;
$hasil=$a*$b;
echo $a. " * ".$b."=".$hasil;

echo "<br>";
$a=100;
$b=5;
$hasil=$a/$b;
echo $a. " / ".$b."=".$hasil;

echo "<br><br>";
print "(++ --)<br>";

$a=10;
$hasil=$a++;
echo $a. " ++ "."=".$hasil;

echo "<br>";
$b=10;
$hasil=$b--;
echo $a. " -- "."=".$hasil;
print "<br>";
// operator bilangan aritmatika //

// operator perbandingan
echo "<br><br><i>operator perbandingan</i><br><br>";
print "(>)<br>";

$bilA=7;
$bilB=8;
var_dump($bilA>$bilB);
print "<br>";

$bilA=10;
$bilB="9";
var_dump($bilA>$bilB);
print "<br>";

$bilA=7;
$bilB=7;
var_dump($bilA>$bilB);
print "<br><br>";

print "(<)<br>";

$bilA=10;
$bilB=9;
var_dump($bilA<$bilB);
print "<br>";

$bilA=7;
$bilB="8";
var_dump($bilA<$bilB);
print "<br>";

$bilA=7;
$bilB=7;
var_dump($bilA<$bilB);
print "<br><br>";

print "(>=)<br>";

$bilA=10;
$bilB=9;
var_dump($bilA>=$bilB);
print "<br>";

$bilA=7;
$bilB="8";
var_dump($bilA>=$bilB);
print "<br>";

$bilA=7;
$bilB=7;
var_dump($bilA>=$bilB);
print "<br><br>";

print "(<=)<br>";

$bilA=7;
$bilB="8";
var_dump($bilA<=$bilB);
print "<br>";

$bilA=10;
$bilB="9";
var_dump($bilA<=$bilB);
print "<br>";

$bilA=7;
$bilB=7;
var_dump($bilA<=$bilB);
print "<br><br>";

print "(==)<br>";

$bilA=7;
$bilB="7";
var_dump($bilB);
var_dump($bilA);
var_dump($bilA==$bilB);
print "<br>";

$bilA=7;
$bilB=6;
var_dump($bilA==$bilB);
print "<br>";

$bilA=7;
$bilB=7;
var_dump($bilA==$bilB);
print "<br><br>";

// kedua tanda ini memiliki fungsi yang sama "yaitu tidak sama dengan"
print "(!=)<br>";

$bilA=7;
$bilB="7";
var_dump($bilA!=$bilB);
print "<br>";

$bilA=7;
$bilB=6;
var_dump($bilA!=$bilB);
print "<br>";

$bilA=7;
$bilB="7";
var_dump($bilA<>$bilB);
print "<br><br>";
// kedua tanda ini memiliki fungsi yang sama "yaitu tidak sama dengan"//
print "(!==)<br>";

$bilA=7;
$bilB="7";
var_dump($bilA!==$bilB);
print "<br>";

$bilA=7;
$bilB=7;
var_dump($bilA!==$bilB);
print "<br>";

$bilA=7;
$bilB=8;
var_dump($bilA!==$bilB);
print "<br>";

// operator perbandingan //

// operator logika
echo "<br><br><i>operator logika</i><br><br>";

echo "(&&)<br>";
$bilA=7;
$bilB=5;
var_dump($bilA ==7 && $bilB==4);
echo "<br>";

$bilA=7;
$bilB=5;
var_dump($bilA ==7 && $bilB==5);

echo "<br><br>(||)<br>";
$bilA=7;
$bilB=5;
var_dump($bilA ==7 || $bilB==4);
echo "<br>";

$bilA=7;
$bilB=5;
var_dump($bilA ==5 || $bilB==1);
echo "<br>";

$bilA=7;
$bilB=5;
var_dump($bilA ==7 || $bilB==5);

echo "<br><br>(!)<br>";
$bilA=7;
var_dump(! $bilA ==7);
echo "<br>";

$bilB=5;
var_dump(!($bilB ==2));

echo "<br><br>(XOR)<br>";
$bilA=7;
$bilB=5;
var_dump($bilA==7 XOR $bilB==5);
echo "<br>";

$bilA=7;
$bilB=5;
var_dump($bilA ==7 XOR $bilB==2);
echo "<br>";

$bilA=7;
$bilB=5;
var_dump($bilA ==2 XOR $bilB==2);
echo "<br>";