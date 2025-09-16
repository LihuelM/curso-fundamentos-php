<?php

    require __DIR__ . '/vendor/autoload.php';

    use App\Course;
    use App\CoursesType;

    $course = new Course (
        title: 'Curso de fundamentos de PHP',
        subtitle: 'Aprende PHP desde cero',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui reprehenderit natus numquam. Nobis tempore praesentium architecto adipisci dolores reprehenderit neque omnis distinctio tenetur necessitatibus autem perspiciatis, nam dolor ullam!',
        tags: ['Javascript', 'PHP', 'React Js', 'Backend'],
    );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title><?= $course->title ?></title>
</head>
<body>
    <?= $course ?>
   
</body>
</html>