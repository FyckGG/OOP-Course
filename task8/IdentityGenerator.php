<?php

class IdentityGenerator implements IGenerator
{
    public function getName() :string
    {
        return 'Identity';
    }

    public function getElement(int $i, int $j) :int
    {
        return $i !== $j ? 1 : 0;
    }
}