<?php
$course = "Curso de fundamentos de PHP";
$price = 29.99;
$publication_date = "25 de junio de 2025";

$archived= true; //o "activo" 
$status= $archived ? "archivado" : "activo"; //Operador Ternario
$level= "Básico"; //o "Intermedio"//o "Avanzado"

$tags = [
    "HTML",
    "CSS",    
    "Javascript",
    "PHP",
    "Node Js",
    "React Js"
];

$courses_related = [
    "Pensamiento Lógico",
    "Diseño de Interfaces",
    "Programación Básica",
    "Patrones y Fundamentos de Diseño",
    "Animaciones con CSS"
];


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

    <p>
        Este curso está <Strong><?= $status ?></Strong>
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

    <h2>
        <strong>Estiquetas:</strong>
    </h2>
    <ul>
       <!-- Recorrer arreglo -->
       <?php foreach ($tags as $tag): ?>
        <li>
            <?= $tag ?>
        </li> 
       <?php endforeach; ?>
        
    </ul>

    <h2>
        <strong>Cursos Relacionados:</strong>
    </h2>
    </h2>
    <ul>
       <?php foreach ($courses_related as $courses ): ?>
        <li>
            <?= $courses  ?>
        </li> 
       <?php endforeach; ?>
        
    </ul>
</body>
</html>