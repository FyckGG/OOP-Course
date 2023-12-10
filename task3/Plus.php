<?php

class Plus implements Operation
{
    public function getName() :string
    {
        return 'Plus';
    }

    public function getSign() :string
    {
        return '+';
    }

    public function getResult(int $a, int $b) :float
    {
        return $a+$b;
    }
}