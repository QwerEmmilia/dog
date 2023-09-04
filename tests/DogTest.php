<?php

use PHPUnit\Framework\TestCase;
use Sinet\Dog\Mops;
use Sinet\Dog\Dachshund;
use Sinet\Dog\PlushLabrador;
use Sinet\Dog\RubberDachshund;
use Sinet\Dog\ShibaInu;

class DogTest extends TestCase
{
    public function testDogSound()
    {
        $mops = new Mops('Mops');
        $this->assertEquals('Woof! Woof!', $mops->makeSound());

        $dachshund = new Dachshund('Dachshund');
        $this->assertEquals('Woof! Woof!', $dachshund->makeSound());

        $plushLabrador = new PlushLabrador('Plush Labrador');
        $this->assertEquals('No sound', $plushLabrador->makeSound());

        $rubberDachshund = new RubberDachshund('Rubber Dachshund');
        $this->assertEquals('Squeak! Squeak!', $rubberDachshund->makeSound());

        $shibaInu = new ShibaInu('Shiba Inu');
        $this->assertEquals('Woof! Woof!', $shibaInu->makeSound());
    }

    public function testDogHunt()
    {
        $mops = new Mops('Mops');
        $this->assertEquals('Too lazy to hunt...', $mops->hunt());

        $dachshund = new Dachshund('Dachshund');
        $this->assertEquals('Іs hunting', $dachshund->hunt());

        $plushLabrador = new PlushLabrador('Plush Labrador');
        $this->assertEquals('Can\'t hunt.', $plushLabrador->hunt());

        $rubberDachshund = new RubberDachshund('Rubber Dachshund');
        $this->assertEquals('Can\'t hunt.', $rubberDachshund->hunt());

        $shibaInu = new ShibaInu('Shiba Inu');
        $this->assertEquals('Іs hunting', $shibaInu->hunt());
    }
}

