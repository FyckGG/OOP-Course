<?php

// class CalculateMaxListener implements IMatrixListener
class CalculateMaxListener extends AbstractTextMatrixListener

{

   private int $max;

   protected function initialization(Matrix $matrix) :void
   {
        $this->max = $matrix->getValue(0, 0);
   }

   protected function nextStep(Matrix $matrix, int $i, int $j) :void
   {
        if ($this->max < $matrix->getValue($i, $j)) {
            
            $this->max = $matrix->getValue($i, $j);
        }
   }

   protected function finalization(Matrix $matrix) :void
   {
    echo 'Max = ' . $this->max . "<br/>";
   }

    // public function matrixUpdated(Matrix $matrix) :int
    // {
    //     $max = 0;

    //     for ($i = 0; $i < $matrix->getSize(); $i++) 
    //     {
    //         for ($j = 0; $j < $matrix->getSize(); $j++) 
    //         {
    //             if ($max < $matrix->getValue($i, $j)) {
                    
    //                 $max = $matrix->getValue($i, $j);
    //             }
    //         }
    //     }

    //     return $max;
    // }
}