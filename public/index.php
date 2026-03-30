<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Patterns\Factory\TicketFactory;
use App\Models\PrioridadeVip;
use App\Models\EmailNotification;
use App\Models\LogSystem;
use App\Services\HelpDeskService;

try {
    // 1. FACTORY: Cria o tipo de ticket
    $chamado = TicketFactory::criar('software');

    // 2. STRATEGY: Define a regra de prioridade
    $estrategia = new PrioridadeVip();
    $prazoFinal = $estrategia->calcularPrazoReal($chamado->getSlaBase());

    // 3. OBSERVER: Configura as notificações
    $service = new HelpDeskService();
    $service->adicionarObservador(new EmailNotification());
    $service->adicionarObservador(new LogSystem());

    echo "--- SISTEMA HELPDESK PRO ---\n";
    
    // Executa a abertura e dispara as notificações automaticamente
    $service->abrirChamado($chamado, $prazoFinal);

} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}