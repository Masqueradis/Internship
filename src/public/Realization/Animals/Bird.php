<?php

class Bird implements Animal
{
    public function makesound()
    {
        echo "tweet tweet <br>";
    }

    public function eat()
    {
        echo "Bird eating sounds <br>";
    }

    public function sleep()
    {
        echo "Bird sleeping sounds <br>";
    }
}