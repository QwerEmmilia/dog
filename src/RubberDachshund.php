<?php

namespace Sinet\Dog;
class RubberDachshund extends Dog
{
    public function makeSound()
    {
        return 'Squeak! Squeak!';
    }

    public function hunt()
    {
        return 'Can\'t hunt.';
    }
}