<?php

namespace App\Models;

use App\Patterns\Factory\Ticket;

class TicketHardware implements Ticket {
    public function getTipo(): string { return "Manutenção de Hardware"; }
    public function getSlaBase(): int { return 72; } // 72h para hardware
}