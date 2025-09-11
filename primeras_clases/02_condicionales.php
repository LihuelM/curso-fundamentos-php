<?php
$course = "Curso de fundamentos de PHP";
$price = 29.99;
$publication_date = "25 de junio de 2025";

$archived= true; //o "activo" 
$status= $archived ? "archivado" : "activo"; //Operador Ternario
$level= "Básico" //o "Intermedio"//o "Avanzado"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title><?= $course ?></title>
</head>
<body>
    <h1>Bienvenidos al <?= $course ?></h1>

    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, placeat. Cum dignissimos consequatur aspernatur magnam culpa non, animi ipsam totam nulla, omnis placeat illo repudiandae ad quaerat repellat voluptatem numquam.</p>

    <p>Obtenlo por solo <?= $price ?> USD</p>
    <p>Recuerda que estará disponible el <?= $publication_date ?></p>

    <!-- <?php  
    if ($archived) {
        echo   "El curso esta archivado";
    } else {
        echo   "El curso esta activo";
    }
    ?> -->

    <!-- <?php if ($archived): ?>
        <p>El curso esta archivado</p>
    <?php else: ?>
        <p>El curso esta activo</p>
    <?php endif; ?> -->

    <p>
        Este curso está <?= $status ?>
    </p>

    <h2>Nivel del Curso: <?= $level ?></h2>
    <?php if ($level == "Básico"): ?>
        <p>Recomendado para quienes recien comienzan</p>
    <?php endif; ?> 

    <?php if ($level == "Intermedio"): ?>
        <p>Recomendado para estudiantes con conocimientos básicos de programación</p>
    <?php endif; ?> 

    <?php if ($level == "Avanzado"): ?>
        <p>Recomendado para estudiantes con conocimientos solidos en programación</p>
    <?php endif; ?> 

</body>
</html>