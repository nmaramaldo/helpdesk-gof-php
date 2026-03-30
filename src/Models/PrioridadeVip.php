<?php
namespace App\Models;
use App\Patterns\Strategy\PrioridadeStrategy;

class PrioridadeVip implements PrioridadeStrategy {
    public function calcularPrazoReal(int $horasBase): int {
        return $horasBase / 2; // VIP resolve na metade do tempo
    }
}