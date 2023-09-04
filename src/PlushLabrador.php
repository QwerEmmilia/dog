<?php

namespace Sinet\Dog;
class PlushLabrador extends Dog
{
    public function makeSound()
    {
        return 'No sound';
    }

    public function hunt()
    {
        return 'Can\'t hunt.';
    }
}