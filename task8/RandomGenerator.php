<?php

class RandomGenerator implements IGenerator
{
    public function getName() :string
    {
        return 'Random';
    }

    public function getElement(int $i, int $j) :int
    {
        return floor(rand(0, 100) * 100);
    }
}