<?php
namespace App\Models;
use App\Patterns\Observer\Observer;

class LogSystem implements Observer {
    public function atualizar(string $mensagem): void {
        echo "[LOG] Gravando no banco de dados: $mensagem\n";
    }
}