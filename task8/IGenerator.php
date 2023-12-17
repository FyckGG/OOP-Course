<?php

interface IGenerator
{
    public function getName() :string;

    public function getElement(int $i, int $j) :int;
}