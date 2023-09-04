<?php

if (count($argv) !== 2) {
    echo "Usage: php index.php 'dog_type action'\n";
    exit(1);
}

require_once 'src/Dog.php';
require_once 'src/Mops.php';
require_once 'src/Dachshund.php';
require_once 'src/ShibaInu.php';
require_once 'src/PlushLabrador.php';
require_once 'src/RubberDachshund.php';
require_once 'src/Console.php';

$command = $argv[1];
Console::handleCommand($command);