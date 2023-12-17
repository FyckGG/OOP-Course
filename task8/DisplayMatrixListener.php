<?php 

class DisplayMatrixListener implements IMatrixListener
{
    public function matrixUpdated(Matrix $matrix) :void
    {
        echo '<table style=>';

        for ($i = 0; $i < $matrix->getSize(); $i++) {

            echo '<tr>';

            for ($j = 0; $j < $matrix->getSize(); $j++) {

                echo '<td>' . $matrix->getValue($i, $j) . '</td>';
            }

            echo '</tr>';
        }

        echo '</table>';
    }
}