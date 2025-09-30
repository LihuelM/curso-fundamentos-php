<?php

namespace App;
use ArdaGnsrn\Ollama\Ollama;

class OllamaAIService
{
  protected $cliente;

  public function __construct()
  {
    $this->cliente = Ollama::client();  
  }   

  public function getResponse(string $question): string
  {
    $result = $this->cliente->chat()->create([
      'model' => 'deepseek-r1:1.5b',
      'messages' => [
        [ 'role' => 'user', 'content' => $question]
      ]
    ] );

    return $result->message->content;
  }
}