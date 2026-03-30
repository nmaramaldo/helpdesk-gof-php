<?php

namespace App\Patterns\Factory;

use App\Models\TicketSoftware;
use App\Models\TicketHardware;
use Exception;

class TicketFactory {
    public static function criar(string $categoria): Ticket {
        return match (strtolower($categoria)) {
            'software' => new TicketSoftware(),
            'hardware' => new TicketHardware(),
            default => throw new Exception("Categoria de ticket não suportada!"),
        };
    }
}