<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA</title>
</head>
<body><center>
<div class="factorial">
<h1>CALCULADORA</h1>
    <hr>

    <p><b>Factorial:</b></p>
    <form action="<?php htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        Introduce un valor:<input type="number" name="fact"></input><br>
        <br><input type="submit" id="check" value="VER">
    </form>
<?php
include "functions.php";
$num = filter_input(INPUT_POST, "fact", FILTER_SANITIZE_SPECIAL_CHARS);
if (isset($num)) {
        $result=factorial($num);
        echo "<p>El factorial de ".$num." es ".$result.".</p>" ;
      } 
?>
</div>
<hr>

<div class="suma">
    <p><b>Suma:</b></p>
    <form action="<?php htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        Introduce un primer valor:<input type="number" name="num1"></input><br>
        Introduce un segundo valor:<input type="number" name="num2"></input><br>
        <br><input type="submit" id="check" value="VER">
    </form>
<?php
$num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_SPECIAL_CHARS);
$num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_SPECIAL_CHARS);
if ($num1 && $num2 ==! null ) {
        $resul=suma($num1, $num2);
        echo "<p>El resultado de la suma entre ".$num1." y ".$num2." es: ".$resul.".</p>" ;
      } 
?>
</div>
<hr>

<div class="primerr">
    <p><b>Primer:</b></p>
    <form action="<?php htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        Introduce un valor:<input type="number" name="prim"></input><br>
        <br><input type="submit" id="check" value="VER">
    </form>
<?php
$number = filter_input(INPUT_POST, "prim", FILTER_SANITIZE_SPECIAL_CHARS);
$resu=isprimer($number);
if(isset($number)){
    if($resu==true){
        echo "El numero ".$number." es primer."; 
    }else{
        echo "El numero ".$number." no es primer.";
    }
}
?>
</div>
<hr>
   <h3> <a href="calcu2.php">CALCU GENERAL</a><h3>
</center></body>
</html>