<?php

$test1 = 7;
$test2 = 15;


if($test1 > 10 && $test2 > 10  ){
    echo "Beide getallen zijn groter dan 10";
}else{
    echo "Beide getallen zijn kleiner dan 10";
}
echo "<br></br>";
if($test1 > 10 || $test2 <10){
    echo "Een van de waardes is groter of kleiner dan 10";
}else{
    echo "Beide waardes zijn niet groter of kleiner dan 10";
}
echo "<br></br>";
if($test1 > 10 xor $test2 >10){
  echo "Een van de waardes is groter dan 10";
}else{
    echo "Beide waardes zijn niet groter dan 10";
}
echo "<br></br>";
if($test1 < 10  ! $test2 > 10){
    echo "Een waarde is niet groter dan 10";
}else{
    echo "Een waarde is wel groter dan 10";
}

echo "hallo";

?>