<?php
        $producten = ["Appels","Peren","Mango's","Mandarijnen","Druiven","Brocolis","Bloemkolen","Papayas","Groene kolen","Rode kolen","Koolrabies"];
        $prijzen = [0.25, 0.30, 1.20, 0.55, 0.70, 0.95, 1.40, 1.50, 1.70, 1.50, 0.35];
        
function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
        
     echo gettype($input); 
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
    
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
}

function getTotal(){
  $totaal =  * getAmount();
  echo $totaal;
}


?>