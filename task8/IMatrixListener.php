<?php

interface IMatrixListener 
{
    public function matrixUpdated(Matrix $matrix) :void;
}