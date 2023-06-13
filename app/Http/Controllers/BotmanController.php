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
                $botman->reply("¡Hola! ¿Le puedo ayudar en algo?");
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
}