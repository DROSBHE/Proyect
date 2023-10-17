<?php
include "Bot.php";
$bot = new Bot;
$questions = [

    //saludo
    "hola" =>"Hola, que tal. ¿En que te puedo ayudar?",
    "que tal?" =>"¿Comó te va?, ¿en que te puedo ayudar?",
    "Hi" =>"Hola, ¿en que te puedo ayudar?",

     //AllCAR
     "que es allcar?" => "Es una aplicacion web que nos brinda informacion sobre nuestro automovil",
     "que servicios tiene?" => "All carr tiene distintos servicios tales como: frenos, suspensión, motor, etc...",
     
     //Servicios
     "como puedo cambiar una llanta?" =>"1. Consigue un espacio seguro, adecuado y alejado de otros carros, 2. Afloja las tuercas de la rueda que deseas sustituir, 3. Levanta el auto con la ayuda del gato hidráulico, 4. Retira las tuercas y la llanta que está dañada, 5. Coloca las tuercas en la llanta nueva, 6. Retira la llanta dañada del piso y baja el auto, 7. Aprieta las tuercas del neumático, 8. Enciende el auto y revisa que todo haya quedado de manera correcta",
     "cuando se cambia el aceite?" =>"El cambio se debe hacer cada 10,000 Km, esto es un promedio. Te recomiendo revisar tu manual de usuario para ver el periodo correcto." ,
     
     //despedida
     "adios" =>"cuidate",
     "hasta la proxima" =>"Nos vemos pronto",
     "nos vemos" =>"Te estare esperando",
     "bye" =>"Good bye",
     "see you" =>"See you lader",

    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, no puedo responder");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}