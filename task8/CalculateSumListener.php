<?php

// class CalculateSumListener implements IMatrixListener

class CalculateSumListener extends AbstractTextMatrixListener
{
    private int $sum;

    protected function initialization(Matrix $matrix) :void
    {
        $this->sum = 0;
    }

    protected function nextStep(Matrix $matrix, int $i, int $j) :void
    {
        $this->sum += $matrix->getValue($i, $j);
    }

    protected function finalization(Matrix $matrix) :void
    {
        echo 'Sum = ' . $this->sum . "<br/>";
    }
    
    // public function matrixUpdated(Matrix $matrix) :int
    // {
    //     $sum = 0;

    //     for ($i = 0; $i < $matrix->getSize(); $i++) {
    //         for ($j = 0; $j < $matrix->getSize(); $j++) {
    //             $sum += $matrix->getValue($i, $j);
    //         }
    //     }

    //     return $sum;
    // }
}