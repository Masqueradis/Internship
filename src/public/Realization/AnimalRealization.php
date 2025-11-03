<?php
    require_once "Animals/Animal.php";
    require_once "Animals/Dog.php";
    require_once "Animals/Cat.php";
    require_once "Animals/Bird.php";

    $Bobik = new Dog();
    $Kitty = new Cat();
    $Yastreb = new Bird();

    // Dog methods
    $Bobik->makesound();
    $Bobik->eat();
    $Bobik->sleep();
    echo "<br>";

    //Cat methods
    $Kitty->eat();
    $Kitty->sleep();
    $Kitty->makesound();
    echo "<br>";

    //Bird methods
    $Yastreb->makesound();
    $Yastreb->eat();
    $Yastreb->sleep();
    echo "<br>" . "<a href='../index.php'>Back</a>";