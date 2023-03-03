<?php

class Person
{
    public string $name;
    public function __construct(public string $name, public int $age, public string $nationality){
    {
     
    }
  function sayHello() 
    {
        echo "Hi, I am {$this->name}\n";
        echo "I am {$this->age} years old \n";
    }
}

$person = new Person('Marko, 36, German');
$person->sayHello();
?> 