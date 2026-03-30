<?php
namespace App\Services;

use App\Patterns\Observer\Observer;
use App\Patterns\Factory\Ticket;

class HelpDeskService {
    private array $observadores = [];

    public function adicionarObservador(Observer $obs) {
        $this->observadores[] = $obs;
    }

    public function abrirChamado(Ticket $ticket, int $prazo) {
        $msg = "Novo ticket de " . $ticket->getTipo() . " aberto com prazo de {$prazo}h.";
        
        // Notifica todo mundo!
        foreach ($this->observadores as $obs) {
            $obs->atualizar($msg);
        }
    }
}