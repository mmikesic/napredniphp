<?php

namespace Math\Geometry\circle;
class Circle{

    public function __construct(private int $radius){

    }

    public function getExtent(): int 
    {
        return 2 * $this->radius * 3.14;

    }

}
