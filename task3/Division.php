<?php

class Division implements Operation
{
    public function getName() :string
    {
        return 'Division';
    }

    public function getSign() :string
    {
        return '/';
    }

    public function getResult(int $a, int $b) :float
    {
        return $a/$b;
    }
}