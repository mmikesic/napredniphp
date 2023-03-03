<?php

spl_autoload_register(function($className){
    //pretvoriti namespace u putanju do filea koji sadrzi klasu
    $classFile = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    //dodati php kstenziju
    $classFile ='src/' . $classFile;
    $classFile .= '.php';
    //provjeriti postoji li taj file
    if(file_exists($classFile)){
        //ako da ucitaj ga
        require $classFile;
        return true;
    }
    return false; 

});

$circle = new Circle(10);
echo $circle ->getExtent(), "\n";



