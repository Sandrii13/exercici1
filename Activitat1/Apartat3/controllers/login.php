<?php

include '../src/schema.php';
include '../src/connect.php';

$dbname='USERS';
$base=connectSqlite($dbname); 

$user = filter_input(INPUT_POST, 'user');
$passwd = filter_input(INPUT_POST, 'passwd');
$register = filter_input(INPUT_POST, 'register');
$fin = filter_input(INPUT_POST, 'fin');
$remember = filter_input(INPUT_POST, 'remember');
$continue = filter_input(INPUT_POST, 'principal');
$go = filter_input(INPUT_POST, 'entrar');
$start = filter_input(INPUT_POST, 'ir');

//registro
if(isset($register)){
    insertSchema($base,$user,$passwd);    
}
//continue
if($continue){
    header("location:../views/start.php");
}
//cerrar sesión
if(isset($fin)){
    setcookie('user', $user, time()-100, '/');
    setcookie('passwd', $passwd, time()-100, '/');
    echo "Has cerrado la sesión.";
    ?> <br><br><a href="../views/login.php">Volver a iniciar sesión</a>
<?php
}

//boton start sin marcar cerrar sesión
if((isset($start))&& (!isset($fin))){
    header("location:../views/start.php");
}
//comparación
if(isset($user) && isset($passwd)){
    $stmt = $base-> prepare("SELECT name,password FROM users WHERE name=:user and password=:passwd");
    try {
        $stmt->bindValue(':user', $user);
        $stmt->bindValue(':passwd', $passwd);
        $stmt->execute();
        $row=$stmt->fetchAll(PDO::FETCH_ASSOC);

        $count=count($row);
        if($count == 1){
            $users=$row[0];
                $_SESSION['user']=$users['user'];
                $_SESSION['passwd']=$users['passwd'];
                if(($_POST['remember']=='on' || $_POST['remember']=='1')){
                    setcookie('user', $user, time()+(60*60*24*365), '/');
                    setcookie('passwd', $passwd, time()+(60*60*24*365), '/');
                    $date=date('d-m-Y H:i');
                    setcookie('date', $date ,time()+3600*24,'/');
                    header("location:../views/start.php");
                }else if((isset($go)) && (!isset($remember)&&(!isset($register)))){
                    header("location:../views/start.php");
                }

        }else{
            echo "El usuario o la contraseña introducidos son incorrectos.";
            ?> <br><br><a href="../views/login.php">Volver al inicio</a>
            <?php
        }

    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
?>