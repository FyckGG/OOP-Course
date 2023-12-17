<?php

//class CalculateTraceListener implements IMatrixListener

class CalculateTraceListener extends AbstractTextMatrixListener
{
    private int $trace;

    protected function initialization(Matrix $matrix) :void
    {
        $this->trace = 0;
    }

    protected function nextStep(Matrix $matrix, int $i, int $j) :void
    {
        if ($i == $j) {
            $this->trace += $matrix->getValue($i, $j); 
        }
    }

    protected function finalization(Matrix $matrix) :void
    {
        echo 'Trace = ' . $this->trace . "<br/>";
    }

    // public function matrixUpdated(Matrix $matrix) :int
    // {
    //     $trace = 0;

    //     for ($i = 0; $i < $matrix->getSize(); $i++) {
    //         $trace += $matrix->getValue($i, $i); 
    //     }

    //     return $trace;
    // }


}