<?php

class ZeroGenerator implements IGenerator
{
    public function getName() :string
    {
        return 'Zero';
    }

    public function getElement(int $i, int $j) :int
    {
        return 0;
    }
}