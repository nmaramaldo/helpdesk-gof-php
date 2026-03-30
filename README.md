# HelpDesk Pro - Implementação de Padrões de Projeto GoF

Este projeto é uma aplicação de **Service Desk (HelpDesk)** desenvolvida em PHP 8.x para a prática de Padrões de Projeto (Design Patterns). O objetivo é demonstrar a aplicação eficaz de três padrões definidos pelo **Gang of Four (GoF)** para resolver problemas comuns de criação, comportamento e comunicação entre objetos.

---

## Padrões de Projeto Implementados

Para este projeto, foram selecionados padrões que cobrem as três categorias principais do GoF:

### 1. Factory Method (Criacional)
**Problema:** O sistema precisava instanciar diferentes categorias de tickets (Software, Hardware), cada um com prazos de atendimento (SLA) específicos, sem acoplar o código cliente às classes concretas.
**Solução:** A classe `TicketFactory` centraliza a lógica de criação. O sistema solicita um ticket por meio de uma string, e a fábrica retorna o objeto correto que implementa a interface `Ticket`.

### 2. Strategy (Comportamental)
**Problema:** As regras de cálculo de prioridade e prazos finais variavam conforme o perfil do usuário (ex: Cliente VIP vs. Usuário Comum). Encher o código de condicionais `if/else` tornaria o sistema difícil de manter.
**Solução:** Encapsulamos os algoritmos de cálculo na interface `PrioridadeStrategy`. Isso permite mudar a "estratégia" de cálculo em tempo de execução sem alterar a classe principal do chamado.

### 3. Observer (Comportamental)
**Problema:** Ao abrir um chamado, múltiplas ações independentes precisam ocorrer (enviar e-mail ao cliente e registrar log no banco de dados).
**Solução:** Implementamos o padrão Observer para desacoplar essas notificações. O `HelpDeskService` (Sujeito) avisa os observadores registrados (`EmailNotification`, `LogSystem`) sempre que um novo evento ocorre, facilitando a adição de novos alertas (ex: SMS) no futuro.

---

## Tecnologias Utilizadas

* **Linguagem:** PHP 8.x
* **Gerenciador de Dependências:** Composer (Autoload PSR-4)
* **Ambiente:** Laragon (Apache/PHP/MySQL)

---

## Estrutura do Projeto

helpdesk-gof-php/
├── public/
│   └── index.php          # Ponto de entrada e testes da aplicação
├── src/
│   ├── Models/            # Classes concretas e estratégias
│   ├── Patterns/          # Interfaces e implementações dos padrões GoF
│   │   ├── Factory/
│   │   ├── Strategy/
│   │   └── Observer/
│   └── Services/          # Lógica de negócio (Sujeito do Observer)
├── composer.json          # Configuração de Autoload
└── README.md              # Documentação do projeto

## Como Executar
Certifique-se de ter o PHP 8.x e o Composer instalados (ou utilize o terminal do Laragon).

### Clone o repositório:
git clone https://github.com/nmaramaldo/helpdesk-gof-php.git

### Acesse a pasta do projeto e sincronize o autoload:
composer dump-autoload

### Execute o arquivo de teste via terminal:
php public/index.php