<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint3-Singleton</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>Excercici Tiger Singleton</h1>
    
    <h2> <a class="red" href="#open-modal">→ Excercici ←</a></h2>
    
    <div id="open-modal" class="modal-window">
        <div>
            <a href="#" title="Close" class="modal-close">X</a>
            <div class="text">
                <p>
                    Tens la següent definició de classe que pretén modelar a el famós personatge de
                    <strong>Tigger</strong> dels llibres "Winnie The Pooh" d'A A.Milne:
                </p>
            </div>
           
            <blockquote>

                <p>
                    <em>Arxiu: tigger.php</em>
                </p>
                <strong>
                    <p>
                        class Tigger
                    </p>
                    <p>
                        {
                    </p>
                    <p>
                        &emsp;private function __construct()
                    </p>
                    <p>
                        &emsp;&emsp;{
                    </p>
                    <p>
                        &emsp; &emsp; &emsp;echo "Building character..." .PHP_EOL;
                    </p>
                    <p>
                        &emsp;&emsp;}
                    </p>
                    <p>
                        &emsp;public function roar()
                    </p>
                    <p>
                        &emsp;&emsp;{
                    </p>
                    <p>
                        &emsp;&emsp;&emsp;echo "Grrr!" .PHP_EOL;
                    </p>
                    <p>
                        &emsp;&emsp;}
                    </p>
                    <p>
                        }
                    </p>
                </strong>

            </blockquote>
            
            <div class="text">
                <p>
                    Sembla raonable esperar que només hi hagi un objecte<strong> Tigger</strong> (després de tot, ell és
                    l'únic!). Però la implementació actual permet tenir<strong style="text-decoration:underline;">
                        múltiples objectes Tigger</strong> diferents:
                </p>
                <p>
                    Refactorizar la classe <strong>Tigger</strong> en un <strong>Singleton</strong> considerant els
                    següents punts:
                </p>
                <p>
                    Definiu el mètode <strong>getInstance ()</strong> que no tingui arguments.
                </p>
                <p>
                    Aquesta funció és responsable de crear una instància de la classe <strong>Tigger</strong> només una
                    vegada i tornar aquesta única instància cada vegada que es crida.
                </p>
                <p>
                    Imprimeix en pantalla múltiples vegades el rugit de <strong>Tigger</strong>.
                </p>
                <p>
                    Afegeix un mètode <strong>getCounter ()</strong> que retorni el nombre de vegades que
                    <strong>Tigger</strong> ha realitzat rugits.
                </p>
            </div>

        </div>
    </div>

    <h2>Result</h2>
    <h3>↓</h3>
    <div class="result">

        <?php

        include("tigger.php");

        Tiger::getInstance()->roar();
        Tiger::getInstance()->roar();
        Tiger::getInstance()->roar();
        Tiger::getInstance()->roar();
        Tiger::getInstance()->roar();
        Tiger::getInstance()->roar();

        echo '<p class="numberCounter red">The counter  = '.Tiger::getInstance()->getCounter().PHP_EOL;
        
    ?>

    </div>

</body>

</html>