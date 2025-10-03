<?php

$app = require __DIR__ . '/../bootstrap.php';

$question = $_POST['question'] ?? '';
$answer = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $question) {
    $answer = $app->getResponse($question);
} 

?>

<form method="POST">
    <label for="question">Pregunta sobre PHP:</label><br>
    <input type="text" name="question" value="<?= htmlspecialchars($question) ?> required>  <br>
   <input type='submit' value='Enviar'>
</form>

<p>
    <strong>Respuesta:</strong><br>
    <?= htmlspecialchars($answer) ?>
</p>