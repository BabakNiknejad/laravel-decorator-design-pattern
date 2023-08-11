<?php

namespace App\Contracts;

interface IRoom
{
    public function getDescription(): string;
    public function calculatePrice(): float;
}
