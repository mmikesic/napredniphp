<?php

// Geometrijski oblici
interface Shape {
    public function area();
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}

// Klasa Notebook koja pohranjuje geometrijske oblike i implementira Iterator
class Notebook implements Iterator {
    private $shapes = array();
    private $position = 0;

    public function addShape(Shape $shape) {
        $this->shapes[] = $shape;
    }

    // Implementacija metoda Iterator
    public function current() {
        return $this->shapes[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        ++$this->position;
    }

    public function rewind() {
        $this->position = 0;
    }

    public function valid() {
        return isset($this->shapes[$this->position]);
    }
}

// Dodajemo nekoliko geometrijskih oblika u objekt Notebook
$notebook = new Notebook();
$notebook->addShape(new Rectangle(4, 5));
$notebook->addShape(new Circle(3));
$notebook->addShape(new Rectangle(2, 3));

// Iteriramo kroz geometrijske oblike koristeći foreach petlju
foreach ($notebook as $shape) {
    echo "Površina oblika je: " . $shape->area() . "\n";
}
