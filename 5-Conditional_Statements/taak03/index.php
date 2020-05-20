<?php


$test1 = 3;
$test2 = 6;


if($test1 == $test2){
    echo "Gelijk!";
}else{
    echo "Niet gelijk!";
}
echo "<br></br>";
if($test1 === $test2){
    echo "Identiek!";
}else{
    echo "Niet identiek!";
}
echo "<br></br>";
if($test1 != $test2){
  echo "Ongelijk!";
}else{
    echo "Wel gelijk!";
}
echo "<br></br>";
if($test1 > $test2){
    echo "Test 1 is groter dan Test 2!";
}else{
    echo "Test 1 is niet groter dan 2!";
}
echo "<br></br>";
if($test1 < $test2){
    echo "Test 2 is groter dan Test 1";
}else{
    echo "Test 2 is kleiner dan Test 1!";
}
echo "<br></br>";
if($test1 >= $test2){
    echo "Test 1 is groter of gelijk aan Test 2";
}else{
    echo "Test 1 is niet groter of gelijk aan Test 2";
}
echo "<br></br>";
if($test1 <= $test2){
    echo "Test 2 is groter of gelijk aan Test 1";
}else{
    echo "Test 2 is niet groter of gelijk aan Test 1";
}





?>