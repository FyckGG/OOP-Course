<?php

class Minus implements Operation
{
    public function getName() :string
    {
        return 'Minus';
    }

    public function getSign() :string
    {
        return '-';
    }

    public function getResult(int $a, int $b) :float
    {
        return $a-$b;
    }
}