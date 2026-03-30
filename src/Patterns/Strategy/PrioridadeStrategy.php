<?php
namespace App\Patterns\Strategy;

interface PrioridadeStrategy {
    public function calcularPrazoReal(int $horasBase): int;
}