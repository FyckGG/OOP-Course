<?php

class Customer 
{
    public function __construct(
        private string $firstName,
        private string $lastName,
        private int $age,
    ) {}
}