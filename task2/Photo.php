<?php
declare(strict_types = 1);

class Photo
{
    public function __construct(private string $size, private bool $isColor) 
    {}

    public function getSize() :string
    {
        return $this->size;
    }

    public function getIsColor() :bool
    {
        return $this->isColor;
    }
}