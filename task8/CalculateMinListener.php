<?php 

class CalculateMinListener extends AbstractTextMatrixListener

{
    private int $min;

    protected function initialization(Matrix $matrix) :void
    {
        $this->min = $matrix->getValue(0, 0);
    }

    protected function nextStep(Matrix $matrix, int $i, int $j) :void
    {
        if ($this->min > $matrix->getValue($i, $j)) {
            
            $this->min = $matrix->getValue($i, $j);
        }
    }

    protected function finalization(Matrix $matrix) :void
    {
        echo 'Min = ' . $this->min . "<br/>";
    }
}