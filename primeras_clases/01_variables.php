<?php
$course = "Curso de fundamentos de PHP";
$price = 29.99;
$publication_date = "25 de junio de 2025";

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
</body>
</html>