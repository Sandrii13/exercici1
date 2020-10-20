<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA</title>
</head>
<body><center>
<div class="factorial">
<h1>CALCULADORA GENERAL</h1>
<div class="performOperation">
<hr>
<?php include "functions.php"; ?>
    <form action="<?php htmlentities($_SERVER['PHP_SELF']);?>" method="GET">

        Introduce un valor:<input type="number" name="number1"></input><br>
        Introduce un valor<u>(sólo para suma)</u>:<input type="number" name="number2"></input><br><br>

        Elige la operación:<br><br>
        <b>Factorial</b><input type="radio" name="pick" value="Factorial"><br>
        <b>Suma</b><input type="radio" name="pick" value="Suma"><br>
        <b>Primer</b><input type="radio" name="pick" value="Primer"><br>

        <br><input type="submit" id="check" value="VER">
    </form>
<?php
performOperation();
?>

<br><br>
<hr>
<h3><a href="calcu.php">VOLVER</a></h3>
</body></center>
</html>