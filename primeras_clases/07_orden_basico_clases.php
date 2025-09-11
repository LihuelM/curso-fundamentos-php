<?php

    require 'Courses.php';

    $course = new Course (
        title: 'Curso de fundamentos de PHP',
        subtitle: 'Aprende PHP desde cero',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui reprehenderit natus numquam. Nobis tempore praesentium architecto adipisci dolores reprehenderit neque omnis distinctio tenetur necessitatibus autem perspiciatis, nam dolor ullam!',
        tags: ['Javascript', 'PHP', 'React Js', 'Backend'],
    );

    $course->addTag('Frameworks');   
    $course->addTag('Developer');   
    $course->addTag('PHP');    
    $course->addTag('');   
    $course->addTag('HTML');   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title><?= $course->getTitle() ?></title>
</head>
<body>
    <h1>Bienvenidos al <?= $course->getTitle() ?></h1>
    
    <h2><?= $course->getSubtitle() ?></h2>

    <p><?= $course->getDescription() ?> </p>

    <p>
        <strong>Estiquetas:</strong>
    </p>
    <ul>
       <!-- Recorrer arreglo -->
       <?php foreach ($course->getTags() as $tag): ?>
        <li>
            <?= $tag ?>
        </li> 
       <?php endforeach; ?>
        
    </ul>
   
</body>
</html>