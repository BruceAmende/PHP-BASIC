<?php


$prod_besteld = 2;

if($prod_besteld < 10) {
    $prijs = 1.50;
    echo $prijs;
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
    echo $prijs;
} else {
    $prijs = 1.00;
    echo $prijs;
}





?>