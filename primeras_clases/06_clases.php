<?php
    
    // Muy antigua-> pero en la documentacion
    // class Course
    // {
    //     public $title;
    //     public $subtitle;
    //     public $description;
    //     public $tags;

    //     public function __construct( $title, $subtitle, $description, $tags) 
    //      {
    //         $this->title = $title;
    //         $this->subtitle = $subtitle;
    //         $this->description = $description;
    //         $this->tags = $tags;
    //     }    
    // }

    class Course {
        public function __construct(
            public string $title,
            public string $subtitle,
            public string $description,
            public array $tags,
        ) {
            
        }
    }
    
    $course = new Course (
        title: 'Pensamiento Lógico',
        subtitle: 'Aprende a razonar como un grande',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui reprehenderit natus numquam. Nobis tempore praesentium architecto adipisci dolores reprehenderit neque omnis distinctio tenetur necessitatibus autem perspiciatis, nam dolor ullam!',
        tags: ['Javascript', 'PHP', 'React Js'],
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
    <h1>Bienvenidos al <?= $course->title?></h1>
    
    <h2><?= $course->subtitle ?></h2>

    <p><?= $course->description ?> </p>

    <p>
        <strong>Estiquetas:</strong>
    </p>
    <ul>
       <!-- Recorrer arreglo -->
       <?php foreach ($course->tags as $tag): ?>
        <li>
            <?= $tag ?>
        </li> 
       <?php endforeach; ?>
        
    </ul>
   
</body>
</html>