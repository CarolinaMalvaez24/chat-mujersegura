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
            $this->askViolenceType($bot);
        });
        $botman->hears('si', function (BotMan $bot) {
            $this->askLocation($bot);
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

    public function askViolenceType(BotMan $bot)
    {
        $bot->ask('Estoy aquí para ayudarte. ¿Qué tipo de violencia estás experimentando? (Por favor, responde con texto)', function (Answer $answer) use ($bot) {
            $response = strtolower($answer->getText());

<<<<<<< HEAD
            switch ($response) {
                case 'violencia física':
                    $this->ask('Por favor, proporciona más detalles sobre la violencia física que estás experimentando. ¿Dónde ocurrió? ¿Cómo te sientes al respecto?', function (Answer $answer) use ($bot) {
                        $details = $answer->getText();

                        $this->say('Gracias por compartir eso. Si necesitas asistencia inmediata, te recomendamos que te pongas en contacto con las autoridades,solo coloca la palabra "si"');
                    });
                    break;
                case 'violencia fisica':
                    $this->ask('Por favor, proporciona más detalles sobre la violencia física que estás experimentando. ¿Dónde ocurrió? ¿Cómo te sientes al respecto?', function (Answer $answer) use ($bot) {
                        $details = $answer->getText();

                        $this->say('Gracias por compartir eso. Si necesitas asistencia inmediata, te recomendamos que te pongas en contacto con las autoridades,solo coloca la palabra "si"');
                    });
                    break;
                case 'fisica':
                    $this->ask('Por favor, proporciona más detalles sobre la violencia física que estás experimentando. ¿Dónde ocurrió? ¿Cómo te sientes al respecto?', function (Answer $answer) use ($bot) {
                        $details = $answer->getText();

                        $this->say('Gracias por compartir eso. Si necesitas asistencia inmediata, te recomendamos que te pongas en contacto con las autoridades,solo coloca la palabra "si"');
                    });
                    break;
                case 'física':
                    $this->ask('Por favor, proporciona más detalles sobre la violencia física que estás experimentando. ¿Dónde ocurrió? ¿Cómo te sientes al respecto?', function (Answer $answer) use ($bot) {
                        $details = $answer->getText();

                        $this->say('Gracias por compartir eso. Si necesitas asistencia inmediata, te recomendamos que te pongas en contacto con las autoridades,solo coloca la palabra "si"');
                    });
                    break;


                case 'violencia emocional':
                    $this->ask('Por favor, proporciona más detalles sobre la violencia emocional que estás experimentando. ¿Cómo te hace sentir? ¿Quién está involucrado?', function (Answer $answer) use ($bot) {
                        $details = $answer->getText();

                        $this->say('Gracias por compartir eso. Si necesitas apoyo emocional, no dudes en comunicarte con nosotros,solo coloca la palabra "si"');
                    });
                    break;
                case 'emocional':
                    $this->ask('Por favor, proporciona más detalles sobre la violencia emocional que estás experimentando. ¿Cómo te hace sentir? ¿Quién está involucrado?', function (Answer $answer) use ($bot) {
                        $details = $answer->getText();

                        $this->say('Gracias por compartir eso. Si necesitas apoyo emocional, no dudes en comunicarte con nosotros,solo coloca la palabra "si"');
                    });
                    break;
                case 'Emocional':
                    $this->ask('Por favor, proporciona más detalles sobre la violencia emocional que estás experimentando. ¿Cómo te hace sentir? ¿Quién está involucrado?', function (Answer $answer) use ($bot) {
                        $details = $answer->getText();

                        $this->say('Gracias por compartir eso. Si necesitas apoyo emocional, no dudes en comunicarte con nosotros,solo coloca la palabra "si"');
                    });
                    break;
                case 'violencia verbal':
                    $this->ask('Por favor, proporciona más detalles sobre la violencia verbal que estás experimentando. ¿Qué tipo de palabras o acciones has enfrentado? ¿Cómo te afecta?', function (Answer $answer) use ($bot) {
                        $details = $answer->getText();

                        $this->say('Gracias por compartir eso. Si necesitas asesoramiento, estamos aquí para ayudarte,solo coloca la palabra "si"');
                    });
                    break;
                case 'verbal':
                    $this->ask('Por favor, proporciona más detalles sobre la violencia verbal que estás experimentando. ¿Qué tipo de palabras o acciones has enfrentado? ¿Cómo te afecta?', function (Answer $answer) use ($bot) {
                        $details = $answer->getText();

                        $this->say('Gracias por compartir eso. Si necesitas asesoramiento, estamos aquí para ayudarte,solo coloca la palabra "si"');
                    });
                    break;
                case 'no lo se':
                    $this->say('Tu seguridad es lo más importante.Necesitamos que te comuniques con nostros');
                    break;
                case 'ninguna':
                    $this->say('Me alegra saber que estás bien. Si tienes otras preguntas, no dudes en preguntar.');
                    break;
                default:
                    $this->say('Lo siento, no pude entender tu respuesta. Por favor, responde con "violencia física," "violencia emocional," "violencia verbal," "no estoy seguro/a," o "ninguna."');
                    $this->askViolenceType($bot);
            }
        });
    }
    public function askLocation(BotMan $bot)
    {
        $bot->ask('Por favor, ingresa el nombre de tu comunidad o zona:', function (Answer $answer) use ($bot) {
            $response = $answer->getText();

            switch ($response) {
                case 'Donato Guerra':
                    $this->ask('El Centro Naranja de Donato Guerra se encuentra en la siguiente dirección: Calle Porfirio Díaz s/n, 51030 Villa Donato Guerra, Estado de México.', function (Answer $answer) use ($bot) {
                        $details = $answer->getText();

                        $this->say('Esta institución es la más cercana a tu domicilio.');
                    });
                    break;
                case 'Valle de Bravo':
                    $this->ask('El Centro Naranja de Valle de Bravo se encuentra en la siguiente dirección: Calle Fray Gregorio Jiménez de la Cuenca, N° 5, Col. La Costera C.P. 51200, Valle de Bravo, Estado de México. (A un costado de vidriería Núñez, Planta alta de pinturas Osel).', function (Answer $answer) use ($bot) {
                        $details = $answer->getText();

                        $this->say('Esta institución es la más cercana a tu domicilio.');
                    });
                    break;
                default:
                    $this->say('Lo siento, no pude entender tu respuesta.');
                    $this->askLocation($bot);
            }
        });
    }
}

=======
        switch ($response) {
            case 'violencia física':
                $this->ask('Por favor, proporciona más detalles sobre la violencia física que estás experimentando. ¿Dónde ocurrió? ¿Cómo te sientes al respecto?', function (Answer $answer) use ($bot) {
                    $details = $answer->getText();
                    
                    $this->say('Gracias por compartir eso. Si necesitas asistencia inmediata, te recomendamos que te pongas en contacto con las autoridades,solo coloca la palabra "si"');
                });
                break;
            case 'violencia emocional':
                $this->ask('Por favor, proporciona más detalles sobre la violencia emocional que estás experimentando. ¿Cómo te hace sentir? ¿Quién está involucrado?', function (Answer $answer) use ($bot) {
                    $details = $answer->getText();
                   
                    $this->say('Gracias por compartir eso. Si necesitas apoyo emocional, no dudes en comunicarte con nosotros,solo coloca la palabra "si"');
                });
                break;
            case 'violencia verbal':
                $this->ask('Por favor, proporciona más detalles sobre la violencia verbal que estás experimentando. ¿Qué tipo de palabras o acciones has enfrentado? ¿Cómo te afecta?', function (Answer $answer) use ($bot) {
                    $details = $answer->getText();
                    
                    $this->say('Gracias por compartir eso. Si necesitas asesoramiento, estamos aquí para ayudarte,solo coloca la palabra "si"');
                });
                break;
            case 'no lo se':
                $this->say('Tu seguridad es lo más importante.Necesitamos que te comuniques con nostros');
                break;
            case 'ninguna':
                $this->say('Me alegra saber que estás bien. Si tienes otras preguntas, no dudes en preguntar.');
                break;
            default:
                $this->say('Lo siento, no pude entender tu respuesta. Por favor, responde con "violencia física," "violencia emocional," "violencia verbal," "no estoy seguro/a," o "ninguna."');
                $this->askViolenceType($bot);
        }
    });
}
public function askLocation(BotMan $bot)
{
    $bot->ask('Por favor, ingresa el nombre de tu comunidad o zona:', function (Answer $answer) use ($bot) {
        $response = $answer->getText();

        switch ($response) {
            case 'Donato Guerra':
                $this->ask('El Centro Naranja de Donato Guerra se encuentra en la siguiente dirección: Calle Porfirio Díaz s/n, 51030 Villa Donato Guerra, Estado de México.', function (Answer $answer) use ($bot) {
                    $details = $answer->getText();
                    
                    $this->say('Esta institución es la más cercana a tu domicilio.');
                });
                break;
            case 'Valle de Bravo':
                $this->ask('El Centro Naranja de Valle de Bravo se encuentra en la siguiente dirección: Calle Fray Gregorio Jiménez de la Cuenca, N° 5, Col. La Costera C.P. 51200, Valle de Bravo, Estado de México. (A un costado de vidriería Núñez, Planta alta de pinturas Osel).', function (Answer $answer) use ($bot) {
                    $details = $answer->getText();
                   
                    $this->say('Esta institución es la más cercana a tu domicilio.');
                });
                break;
           default:
                $this->say('Lo siento, no pude entender tu respuesta.');
                $this->askLocation($bot);
        }
    });
}
}
                        
>>>>>>> d893c1b7e19205ddb37461ad511f331f3106f391
