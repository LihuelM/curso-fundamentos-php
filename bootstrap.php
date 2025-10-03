<?php

require __DIR__ . '/vendor/autoload.php';

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
// $dotenv->load();

// $iaService = new App\FakeAIService();
 $iaService = new App\OllamaAIService();
// $iaService = new App\OpenAIService();

return new App\Chat($iaService);