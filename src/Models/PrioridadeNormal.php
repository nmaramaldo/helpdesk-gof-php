<?php
namespace App\Models;
use App\Patterns\Strategy\PrioridadeStrategy;

class PrioridadeNormal implements PrioridadeStrategy {
    public function calcularPrazoReal(int $horasBase): int {
        return $horasBase; // Prazo padrão
    }
}