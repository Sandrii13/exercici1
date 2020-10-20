<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>¡Bienvenido/a <?php echo htmlspecialchars($_COOKIE["user"])?> al blog!</h2>
    <hr>
    La fecha de tu última sesión fue: <b><?php echo htmlspecialchars($_COOKIE["date"])?></b>
    <div>
        <form action="../controllers/login.php" method="POST">
        <br><input type="checkbox" name="fin"><label>Cerrar sesión</label><br>
        <input type="submit" name="ir" value="Cerrar">
        </form><br><br>
        <iframe width="900" height="550" src="https://educaciodigital.cat/escolesnuria/moodle/" frameborder="1" allowfullscreen></iframe>
 
    </div>
</body>
</html>