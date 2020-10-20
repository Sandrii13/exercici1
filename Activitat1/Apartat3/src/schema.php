<?php

function schemaGenerator(PDO $db){
    $command='
    CREATE TABLE IF NOT EXISTS users(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name VARCHAR(100) NOT NULL,
        password VARCHAR(100) NOT NULL
    )';
    try{
        $db->exec($command);
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
    
function insertSchema($db, $user, $passwd){
                $command="
                INSERT INTO users(name, password)
                VALUES ('$user', '$passwd')";
                try{
                    $db->exec($command);
                    echo "¡El usuario se ha creado correctamente!";
                    ?><br><br><a href="../views/login.php">Volver para iniciar sesión</a><?php
                }catch(PDOExeception $e){
                   die($e->getMessage());
                }
        }

 
?>