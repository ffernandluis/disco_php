<?php 

 function conecta(){

    try {
        
        $cadena = 'mysql:host=localhost; dbname=disco_db';
        $conexion = new PDO($cadena,'root','holamundo');

        return true;

    } catch (PDOException $e) {

        echo "ERROR: ".$e->getMessage();
        
    }
 }
?>