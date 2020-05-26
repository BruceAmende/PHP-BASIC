<?php
        $producten = ["Appels","Peren","Mango's","Mandarijnen","Druiven","Brocolis","Bloemkolen","Papayas","Groene kolen","Rode kolen","Koolrabies"];
        $prijzen = [0.25, 0.30, 1.20, 0.55, 0.70, 0.95, 1.40, 1.50, 1.70, 1.50, 0.35];
       
        
function getInput()
{
    $waarde = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
        
       echo gettype($waarde);
     
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
    $prijzen = [0.25, 0.30, 1.20, 0.55, 0.70, 0.95, 1.40, 1.50, 1.70, 1.50, 0.35];
    $zoeken = $_GET['productnummer'];
    $aantalProd = $_GET['aantal'];
    
    
    echo $prijzen[$zoeken] * $aantalProd;
}

function getDisc(){
    $input = $_GET['leeftijd'];
    if($input < 16){
        echo "1 euro";
    }elseif($input == 19){
        echo "19 cent";
    }elseif($input == 18){
        echo "18 cent";
    }elseif($input == 17){
        echo "17 cent";
    }elseif($input == 16){
        echo "16 cent";
    }else {
        echo "Je hebt helaas geen korting";
    }
}


?>