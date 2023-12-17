<?php

class Matrix
{
    private const SIZE = 10;

    private array $contents = [];

    private array $listeners = [];

    private IGenerator $generator;

    public function addListener(IMatrixListener $listener) :void
    {
        $this->listeners[] = $listener;
    }

    private function notifyAboutUpdate() :void 
    {
        foreach ($this->listeners as $listener)
        {
            $listener->matrixUpdated($this);
        }
    }

    public function getSize() :int
    {
        return self::SIZE;
    }

    public function setGenerator(IGenerator $generator) :void
    {
        $this->generator = $generator; 
    }

    public function update() :void
    {

        for ($i = 0; $i < self::SIZE; $i++)
        {
            for ($j = 0; $j < self::SIZE; $j++)
            {
                $this->contents[$i][$j] = $this->generator->getElement($i, $j);
            }
        }

        $this->notifyAboutUpdate();
    }

    public function getValue(int $i, int $j) :int
    {
        return $this->contents[$i][$j];
    }
}