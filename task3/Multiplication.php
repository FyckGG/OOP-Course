<?php

class Multiplication implements Operation
{
    public function getName() :string
    {
        return 'Multiplication';
    }

    public function getSign() :string
    {
        return '*';
    }

    public function getResult(int $a, int $b) :float
    {
        return $a*$b;
    }
}