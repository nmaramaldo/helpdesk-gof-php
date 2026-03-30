<?php

namespace App\Models;

use App\Patterns\Factory\Ticket;

class TicketSoftware implements Ticket {
    public function getTipo(): string { return "Bug/Ajuste de Software"; }
    public function getSlaBase(): int { return 24; } // 24h para software
}