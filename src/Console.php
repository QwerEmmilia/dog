<?php

use Sinet\Dog\Mops;
use Sinet\Dog\Dachshund;
use Sinet\Dog\PlushLabrador;
use Sinet\Dog\RubberDachshund;
use Sinet\Dog\ShibaInu;

class Console
{
    public static function handleCommand($command)
    {
        $parts = explode(' ', $command);
        if (count($parts) !== 2) {
            echo "Invalid command format. Use: 'dog_type action'\n";
            return;
        }

        $dogType = $parts[0];
        $action = $parts[1];

        switch ($dogType) {
            case 'mops':
                $dog = new Mops('Mops');
                break;
            case 'dachshund':
                $dog = new Dachshund('Dachshund');
                break;
            case 'plush_labrador':
                $dog = new PlushLabrador('Plushy Labrador');
                break;
            case 'rubber_Dachshund':
                $dog = new RubberDachshund('Rubber Dachshund');
                break;
            case 'shiba_inu':
                $dog = new ShibaInu('Shiba Inu');
                break;
            default:
                echo "Invalid dog type.\n";
                return;
        }

        switch ($action) {
            case 'sound':
                echo $dog->makeSound() . "\n";
                break;
            case 'hunt':
                echo $dog->hunt() . "\n";
                break;
            default:
                echo "Invalid action.\n";
        }
    }
}
