<?php
    $course = [
        'title' =>  "Curso de fundamentos de PHP",
        'subtitle' => "Aprende PHP desde cero",
        'description' => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, rem! Recusandae officiis consectetur incidunt itaque fugit nulla reprehenderit est eveniet, modi error aliquid quos quod autem ipsum repellendus fugiat? Totam.",
        'tags' => [
             "HTML",
             "CSS",    
             "Javascript",
             "PHP",
             "Node Js",
             "React Js"
        ],
        'courses_related' => [
            "Pensamiento Lógico",
            "Diseño de Interfaces",
            "Programación Básica",
            "Patrones y Fundamentos de Diseño",
            "Animaciones con CSS"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title><?= $course['title' ]?></title>
</head>
<body>
    <h1>Bienvenidos al <?= $course['title' ]?></h1>
    <h2>Bienvenidos al <?= $course['subtitle' ]?></h2>

    <p>
         <?= $course['description' ]?>
    </p>

    <p>
        <strong>Estiquetas:</strong>
    </p>
    <ul>
       <!-- Recorrer arreglo -->
       <?php foreach ($course['tags'] as $tag): ?>
        <li>
            <?= $tag ?>
        </li> 
       <?php endforeach; ?>
        
    </ul>

    <p>
        <strong>Cursos Relacionados:</strong>
    </p>
    <ul>
       <?php foreach ($course['courses_related'] as $courses): ?>
        <li>
            <?= $courses  ?>
        </li> 
       <?php endforeach; ?>
        
    </ul>
</body>
</html>