<?php

namespace OctoberMoon\CloudInterfaces\Interfaces;

interface CalculatorServiceInterface
{
    public function add(int $a, int $b): int;

    public function minus(int $a, int $b): int;

    public function mul(int $a, int $b): int;

    public function div(int $a, int $b): int;
}