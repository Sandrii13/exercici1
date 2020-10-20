<?php
//si esta recordado
if(isset($_COOKIE['user']) && isset($_COOKIE['passwd'])){
  header("location:../views/loged.html");
}
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title></title>
  </head>
  <body>
    <div>
        <form action="../controllers/login.php" method="POST">
            <!-- Username -->
            <label>Usuario:</label>
            <input type="name" name="user" placeholder="Usuario"><br>
            <!-- Password -->
            <label>Contraseña:</label>
            <input type="password" name="passwd" placeholder="Contraseña">
            <div>
                <input type="checkbox" name="remember"><label>Recuérdame</label><br>
                <input type="checkbox" name="register"><label>Registrarme</label><br>
                <!-- Submit Button -->
                <input type="submit" name="entrar" value="Entrar">
            </div>
        </form>
    </div>
</body>
</html>