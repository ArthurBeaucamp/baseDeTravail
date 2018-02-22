<?php

//On inclue automatiquement toutes les classes du project
require(__DIR__.'/vendor/autoload.php');

// On crée notre application
$application = new Core\Application();
// On lance l'application
$application->run();
