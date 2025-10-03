<?php

namespace App;

class Chat
{
    public function __construct(
        private AIServiceInterface $iaService
    )
    {}

    public function start()
    {
        $this->welcome();

            while ( $input = $this->prompt() ) {
                if ($this->exit($input)){
                    break;
             }
                
                $response = $this->getResponse($input);
                
               $this->output($response);
        }
    }

    private function welcome()
    {
         echo 'Ask anithing to AI...' . PHP_EOL;
    }   

    private function prompt()
    {
        return  readline('> ');
    }

    private function exit($input)
    {
        return trim($input) === 'exit';
    }

    private function output($response)
    {
        echo $response . PHP_EOL;
    }   

    public function getResponse($input)
    {
        return $this->iaService->getResponse($input);
    }
}