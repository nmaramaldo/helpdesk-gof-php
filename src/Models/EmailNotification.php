<?php
namespace App\Models;
use App\Patterns\Observer\Observer;

class EmailNotification implements Observer {
    public function atualizar(string $mensagem): void {
        echo "[E-MAIL] Enviando para o cliente: $mensagem\n";
    }
}