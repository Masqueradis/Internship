<?php

class Cat implements Animal
{
    public function makesound()
    {
        echo "meow meow <br>";
    }

    public function eat()
    {
        echo "Cat eating sounds <br>";
    }

    public function sleep()
    {
        echo "Cat sleeping sounds <br>";
    }
}