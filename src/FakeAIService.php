<?php

namespace App;

class FakeAIService
{
  public function getResponse(string $question): string
  {
    sleep(2);

    if (strpos($question, 'PHP') !== false) {
      return 'AI: ' . $question;
    } else {
      return 'AI: Esa es una buena pregunta. Pero solo respondo acerca de PHP';
    }
    
  }
}   