<?php

namespace App\Patterns\Factory;

interface Ticket {
    public function getTipo(): string;
    public function getSlaBase(): int; // horas para resolver
}