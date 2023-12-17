<?php

require './Matrix.php';
require './IGenerator.php';
require './DiagonalGenerator.php';
require './EmptyDiagonalGenerator.php';
require './IdentityGenerator.php';
require './RandomGenerator.php';
require './ZeroGenerator.php';
require './IMatrixListener.php';
require './DisplayMatrixListener.php';
require './AbstractTextMatrixListener.php';
require './CalculateMinListener.php';
require './CalculateMaxListener.php';
require './CalculateSumListener.php';
require './CalculateTraceListener.php';

class MatrixService
{
    private Matrix $matrix;

    public function __construct()
    {
        $this->matrix = new Matrix();
    }

    public function generateMatrix(string $type) :void
    {
        $generator = null;

        if ($type === 'diagonal') {
            $generator = new DiagonalGenerator();
        } else if ($type === 'empty_diagonal') {
            $generator = new EmptyDiagonalGenerator();
        } else if ($type === 'identity') {
            $generator = new IdentityGenerator();
        } else if ($type === 'random') {
            $generator = new RandomGenerator();
        } else {
            $generator = new ZeroGenerator();
        }

        $dispayMatrinxListener = new DisplayMatrixListener();
        $calculateMinListener = new CalculateMinListener();
        $calculateMaxListener = new CalculateMaxListener();
        $calculateSumListener = new CalculateSumListener();
        $calculateTraceListener = new CalculateTraceListener();

        $this->matrix->setGenerator($generator);

        $this->matrix->addListener($dispayMatrinxListener);
        $this->matrix->addListener($calculateMinListener);
        $this->matrix->addListener($calculateMaxListener);
        $this->matrix->addListener($calculateSumListener);
        $this->matrix->addListener($calculateTraceListener);

        $this->matrix->update();
    }
}