<?php

namespace Sinet\Dog;

class Dog
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function makeSound()
    {
        return 'Woof! Woof!';
    }

    public function hunt()
    {
        return 'Іs hunting';
    }
}