<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;



class BotmanController extends Controller
{
    public function enterRequest()
    {
        $botman = app('botman');

        $botman->hears('Hola', function (BotMan $bot) {
            $this->askName($bot);
        });

        $botman->hears('ayuda', function (BotMan $bot) {
            $this->askViolence($bot);
        });

        $botman->listen();
    }

    public function askName(BotMan $bot)
    {
        $bot->ask('¡Hola, me da gusto que te comuniques con nosotros! ¿Cómo te llamas?', function(Answer $answer) use ($bot) {
            $name = $answer->getText();
            $this->say('Encantado de conocerte, '.$name.'. Si necesitas que te brindemos ayuda, solo dime "ayuda".');
        });
    }
   public function askViolence(BotMan $bot)
{
    $bot->ask('Estoy aquí para ayudarte. ¿Qué tipo de violencia estás experimentando?', function (Answer $answer) use ($bot) {
        $response = strtolower($answer->getText());
        
        if (strpos($response, 'física') !== false) {
            $this->askPhysicalViolenceDetails($bot);
        } elseif (strpos($response, 'emocional') !== false) {
            $this->askEmotionalViolenceDetails($bot);
        } elseif (strpos($response, 'verbal') !== false) {
            $this->askVerbalViolenceDetails($bot);
        } elseif (strpos($response, 'no estoy seguro') !== false) {
            $this->say('Si en algún momento necesitas ayuda o tienes dudas, no dudes en contactarnos.');
        } elseif (strpos($response, 'ninguna') !== false) {
            $this->say('Me alegra saber que estás bien. Si tienes otras preguntas, no dudes en preguntar.');
        } else {
            $this->say('Lo siento, no pude entender tu respuesta. Por favor, elige una de las opciones disponibles o proporciona más detalles.');
            $this->askViolence($bot);
        }
    });
}


public function askPhysicalViolenceDetails(BotMan $bot)
{
    $bot->ask('Por favor, proporciona más detalles sobre la violencia física que estás experimentando. ¿Dónde ocurrió? ¿Cómo te sientes al respecto?', function (Answer $answer) use ($bot) {
        $details = $answer->getText();
        // Puedes manejar la respuesta del usuario aquí
        $this->say('Gracias por compartir eso. Si necesitas asistencia inmediata, te recomendamos que te pongas en contacto con las autoridades.');
    });
}

public function askEmotionalViolenceDetails(BotMan $bot)
{
    $bot->ask('Por favor, proporciona más detalles sobre la violencia emocional que estás experimentando. ¿Cómo te hace sentir? ¿Quién está involucrado?', function (Answer $answer) use ($bot) {
        $details = $answer->getText();
        // Puedes manejar la respuesta del usuario aquí
        $this->say('Gracias por compartir eso. Si necesitas apoyo emocional, no dudes en comunicarte con nosotros.');
    });
}

public function askVerbalViolenceDetails(BotMan $bot)
{
    $bot->ask('Por favor, proporciona más detalles sobre la violencia verbal que estás experimentando. ¿Qué tipo de palabras o acciones has enfrentado? ¿Cómo te afecta?', function (Answer $answer) use ($bot) {
        $details = $answer->getText();
        // Puedes manejar la respuesta del usuario aquí
        $this->say('Gracias por compartir eso. Si necesitas asesoramiento, estamos aquí para ayudarte.');
    });
}

    

}
