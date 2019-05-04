<?php
    require_once 'estudiantes_modelo.php';
    $estudiante =  new Estudiantes_modelo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    
    <h1>CRUD  de Estudiantes</h1>

    <?php
        var_dump (PDO::getAvailableDrivers());

    ?>

    <h3>
        C: Insertar
    </h3>

    <?php
    /*
        $alumno = [
            'nombre' => 'Luis',
            'paterno' => 'Rojas',
            'materno' => 'D',
            'email'  => 'Hello@gmail.com'
        ];
        

        $estudiante->insertar($alumno);
        */
    ?>

    <h3>R: Leer/Consultar</h3>

    <?php
        /*
        $resultados =$estudiante->consultar();

        foreach ($resultados as $estudiante) {

            echo $estudiante['nombre']." ".$estudiante['paterno']."<br>";
        }*/
    
    ?>

    <h3>U: Actualizar</h3>


    <?php
        $alumno = [
            'nombre'  => 'Armando',
            'paterno' => 'Torres',
            'materno' => 'J',
            'email'   => 'Hello@gmail.com'
        ];

        $estudiante->actualizar($alumno);
    ?>

    <h3>D: Eliminar</h3>
    <?php
        $alumno = [
            'email'=> 'sillvercorp@gmail.com'
        ];
        $estudiante->eliminar('todos',$alumno);
    ?>
</body>
</html>