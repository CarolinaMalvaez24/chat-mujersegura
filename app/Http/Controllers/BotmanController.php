<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class BotmanController extends Controller
{
    public function enterRequest()
{
    $botman = app('botman');
    $botman->hears('{message}', function(BotMan $botman, $message) {
        if ($message == 'hola') {
            $this->askName($botman);
        } else {
            $violenceKeywords = $this->checkForViolence($message);
            if (!empty($violenceKeywords)) {
                $this->askViolence($botman, $violenceKeywords);
            } else {
                $botman->reply("¡Hola! ¿Le puedo ayudar en algo?");
            }
        }  
    });
    $botman->listen();
}

    public function askName(BotMan $botman)
    {
        $botman->ask('¡Hola! ¿Cómo te llamas?', function(Answer $answer) use ($botman) {
            $name = $answer->getText();
            $this->say('Encantada de conocerte, '.$name);
        });
    }

    public function askViolence(BotMan $botman)
    {
        $instituciones = [
            'Centro Naranja de Valle de Bravo',
            'Centro de ayuda a la mujer',
            // Agrega más enlaces de instituciones aquí
        ];
    
        $botman->ask('Tu caso es grave porque se reconocieron las palabras de violencia. ¿Necesitas ayuda o información sobre cómo enfrentar la violencia?', function (Answer $answer) use ($botman, $instituciones) {
            $response = strtolower($answer->getText());
            if (strpos($response, 'si') !== false) {
                $randomIndex = array_rand($instituciones);
                $this->say('Aquí puedes encontrar recursos y organizaciones que pueden ayudarte: ' . $instituciones[$randomIndex]);
            } else {
                $this->say('Si en algún momento necesitas ayuda, no dudes en pedirla. Estoy aquí para ti.');
            }
        });
    }
    

    public function checkForViolence($message)
    {
        $keywords = ['golpes','golpeando','golpe','golpeada','golpear','golpeo','golpeaste','golpeara',
        'amenaza','amenazas','amenazando','empujo','empujar', 'empujones',
        'grito','gritos','gritar','gritando','abusos','violacion','discriminacion','acoso',
        'manipulacion','patadas'];
        $pattern = '/' . implode('|', $keywords) . '/i';
        return preg_match($pattern, $message);
    }
}
