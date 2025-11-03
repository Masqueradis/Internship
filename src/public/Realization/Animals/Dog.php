<?php

class Dog implements Animal
{
    public function makesound()
    {
        echo "woof woof <br>";
    }

    public function eat()
    {
        echo "Dog eating sounds <br>";
    }

    public function sleep()
    {
        echo "Dog sleeping sounds <br>";
    }
}