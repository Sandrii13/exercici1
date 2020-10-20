<?php
declare(strict_types=1);

function factorial ($num1) {
    $factorial=1;
    for($i=1;$i<=$num1;$i++){
        $factorial = $factorial*$i;
    }
    return $factorial;
}

function suma($num1,$num2){
    $result=[$num1,$num2];
    $suma=array_sum($result);
    return $suma;
}
function isprimer($num1):bool {
    $div = 2;
    while ($div <= $num1 / 2) {
        if ($num1 % $div == 0) {
            return false;
        }
           $div++;
        }
    return true;
}
function performOperation(){
    $num1 = $_GET["number1"];
    $num2 = $_GET["number2"];
    $pick = $_GET["pick"];

    if($num1 != null && $num2 == null){
        if($pick =="Factorial"){
            $resp=factorial($num1);
            echo "El Factorial de ".$num1. " es ".$resp.".";
        } else if($pick =="Primer"){
            $resp=isprimer($num1);
            if($resp==true){
                echo $num1." es primer."; 
            }else{
                echo $num1." no es primer.";
            }
        } 
    } else if($pick =="Factorial" || $pick =="Primer") {
            if ($num1 != null && $num2 != null){
                echo "Introducir un segundo valor solo sirve para la suma.";
            }
        }
    if($num1 != null && $num2 != null){
        if($pick =="Suma"){
            $resp=suma($num1,$num2);
            echo "La suma de ".$num1." y ".$num2." es ".$resp.".";
        } 
    } else if($pick =="Suma"){
        if(($num1 != null && $num2 == null) || ($num1 == null && $num2 != null)){
        echo "Debes introducir dos valores para hacer la suma.";
        }
    }
}


?>
