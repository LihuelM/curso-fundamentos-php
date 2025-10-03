<?php

namespace App;
use OpenAI;

class OpenAIService  implements AIServiceInterface
{
  protected $cliente;

  public function __construct()
  {
    $this->cliente = OpenAI::client($_ENV['OPENAI_API_KEY']);  
  }   

  public function getResponse(string $question): string
  {
    $result = $this->cliente->chat()->create([
      'model' => 'gpt-3.5-turbo',
      'messages' => [
        ['role' => 'system', 'content' => <<<EOT
          Eres un asistente especializado exclusivamente en responder preguntas sobre PHP.
          - Si la pregunta no está relacionada con PHP, responde con "Lo siento, solo puedo responder preguntas sobre PHP."
          - Si te preguntan algo relacionado con PHP, responde de forma breve y consisa. Sin rodeos.
          EOT
        ],
        [ 'role' => 'user', 'content' => $question]
      ]
    ] );

    return $result['choices'][0]['message']['content']; 
  }
}