<?php
namespace App\Patterns\Observer;

interface Observer {
    public function atualizar(string $mensagem): void;
}