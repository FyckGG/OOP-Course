<?php

class EmptyDiagonalGenerator implements IGenerator
{
    public function getName() :string
    {
        return 'Empty diagonal';
    }

    public function getElement(int $i, int $j) :int
    {
        return $i === $j ? 0 : floor(rand(0, 100) * 100);
    }
}