<?php

echo '<h1>Base de datos con PHP</h1>';

require_once __DIR__.'/conecta.inc.php';

$conecta = conecta();
if($conecta ==true){
    echo '<p>Conexion exitosa</p>';
}

$data;
?>