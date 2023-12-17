<?php

abstract class AbstractTextMatrixListener implements IMatrixListener
{
    final public function matrixUpdated(Matrix $matrix) :void
    {
        $this->initialization($matrix);

        for ($i = 0; $i < $matrix->getSize(); $i++) {
            for ($j = 0; $j < $matrix->getSize(); $j++) {
                $this->nextStep($matrix, $i, $j);
            }
        }

        $this->finalization($matrix);
    }

    protected abstract function initialization(Matrix $matrix) :void;
    protected abstract function nextStep(Matrix $matrix, int $i, int $j) :void;
    protected abstract function finalization(Matrix $matrix) :void; 
}