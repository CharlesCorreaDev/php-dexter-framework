# 📋 Handoff: Tarefas Pendentes e Roadmap de Implementação

**Projeto:** Dexter Framework  
**Versão:** 0.1.0-beta  
**Data da Última Atualização:** 2026-11-05  
**Autor:** Charles Corrêa  
**Status do Projeto:** Base configurada, dependências instaladas, testes operacionais. Pronto para codificação do Core e módulos.

---

## 1. O Que Foi Concluído (Base do Sistema)
- [x] Repositório Git inicializado e sincronizado com o GitHub (`main`).
- [x] Toda documentação legada expurgada; documentação oficial em `.agents/agent.md` e `.agents/docs/` (`SPEC.md`, `MVC.md`, `Security.md`, `SQL.md`, `Frontend_Guidelines.md`, etc.).
- [x] Ambiente PHP 8.4.19 configurado para VS Code (`.vscode/settings.json`) e Antigravity (`.agents/rules/php-runtime.md`).
- [x] Dependências essenciais instaladas via Composer (`composer.json` e `composer.lock`): Twig, PHP-DI, PHPMailer, Predis (Valkey/Redis), phpFastCache, Secure-Headers, 6 Provedores OAuth 2.0 (Google, Microsoft, Azure M365, Twitch, Discord, LinkedIn), PHPUnit 11, PHPStan, PHP_CodeSniffer e Whoops.
- [x] Estrutura de pastas do projeto criada (`core`, `app`, `backend`, `modules`, `config`, `database/migrations`, `database/seeds`, `storage`, `testes`).
- [x] Variáveis de ambiente tipadas em `.env.example` e segurança de arquivos em `.gitignore`.
- [x] Design System base em `Themes.css` (Paleta 90271) e telemetria unificada `DexterAnalytics` em `bootstrap-theme-custom.js`.
- [x] Suíte completa de skills integradas em `.agents/skills/` (tdd, codebase-design, domain-modeling, grill-me, handoff, wait-what, caveman, ponytail, headroom, compact-service, commit-work, composio skills, humanizer-plus, adhd, i-have-adhd, etc.).

---

## 2. Tarefas Pendentes por Camada (Backlog Priorizado)

### 🚀 Bloco 1: Core HTTP & Injeção de Dependências (Prioridade Alta)
- [x] **1.1. Router (`core/Http/Router.php`):**
  - Implementado despachante de rotas HTTP com suporte a métodos (GET, POST, PUT, PATCH, DELETE, OPTIONS).
  - Suporte a grupos de rotas com prefixos e middlewares atribuídos.
  - Parâmetros dinâmicos na URL (`/usuarios/{id}`).
- [x] **1.2. Request & Response (`core/Http/Request.php`, `core/Http/Response.php`, `core/Http/ResponseEmitter.php`):**
  - Encapsulamento de entradas HTTP, sanitização de dados, headers e arquivos enviados.
  - Emissor de respostas estruturadas: HTML (Twig), JSON, XML e downloads de arquivos.
- [x] **1.3. Pipeline de Middlewares (`core/Http/Middleware/`):**
  - Interface `MiddlewareInterface`.
  - Middleware de Security Headers (`SecureHeadersMiddleware`).
  - Middleware de Verificação de IP e Anti-Spam (`GuardaIPMiddleware` integrado a Valkey e Stop Forum Spam).
  - Middleware de proteção CSRF com geração e checagem de tokens criptográficos (`CsrfProtectionMiddleware`).
- [x] **1.4. Container de Injeção de Dependência (`core/Container/ContainerFactory.php`):**
  - Configuração do PHP-DI com definições do framework e resolução automática de dependências (autowiring).

---

### 🗄️ Bloco 2: Database Manager Multiconexão & Migrations (Prioridade Alta)
- [x] **2.1. Conector Multiconexão (`core/Database/DatabaseManager.php`, `core/Database/Conexao/ConexaoFactory.php`):**
  - Suporte simultâneo a conexões nomeadas (ex: `padrao`, `firebird_legado`, `datalake_pgsql`).
  - Implementação para PostgreSQL, MySQL/MariaDB, SQLite, SQL Server e **Firebird** (`pdo_firebird`).
  - Configuração automática do timezone de sessão para Brasília (`America/Sao_Paulo` / `-03:00`).
  - Gestão de transações atômicas com `iniciarTransacao()`, `confirmar()`, `reverter()` e helper com closure `transacao()`.
- [x] **2.2. Fluent Query Builder (`core/Database/Query/QueryBuilder.php`, `core/Database/Gramatica/`):**
  - Construtor de consultas parametrizadas (SELECT, INSERT, UPDATE, DELETE) impedindo SQL puro e injeção de SQL.
  - Gramáticas de dialeto dedicadas (`GramaticaPadrao` e `GramaticaFirebird` com FIRST/SKIP).
  - Métodos fluentes em português: `tabela()`, `campos()`, `onde()`, `ouOnde()`, `ondeNulo()`, `ondeEm()`, `juntar()`, `juntarEsquerda()`, `ordenarPor()`, `limite()`, `deslocamento()`, `obter()`, `primeiro()`, `contar()`, `inserir()`, `atualizar()`, `excluir()`.
- [x] **2.3. Motor de Migrations (`core/Database/Migrations/MigrationRunner.php`, `core/Database/Schema/`):**
  - Tabela interna de controle `dexter_migracoes`.
  - Schema Builder com `Blueprint` e tipagem estrita para criação de tabelas.
  - Execução cronológica de migrations com métodos `executarPendentes()`, `reverterUltimoLote()` e `obterStatus()`.

---

### ⚡ Bloco 3: Cache Manager & Filas "The Dark Passenger" (Prioridade Média)
- [ ] **3.1. CacheManager (`core/Cache/CacheManager.php`):**
  - Adapters para Valkey, Redis, FileCache próprio, phpFastCache, APCu e Memcached.
  - Suporte a TTL dinâmico, invalidação por tags/namespaces e prefixação de chaves.
- [ ] **3.2. Fila e Tarefas Assíncronas (`core/Queue/DarkPassengerQueue.php`):**
  - Suporte a Valkey, Redis e RabbitMQ.
  - Processador de fila (worker daemon) com políticas de retry e backoff exponencial.
- [ ] **3.3. Agendador de Tarefas Interno (`core/Cron/CronScheduler.php`):**
  - Gerenciador de rotinas agendadas com sintaxe expressiva.

---

### ✉️ Bloco 4: Serviço de E-mail Transacional (`core/Mail/`)
- [ ] **4.1. Mailer Wrapper (`core/Mail/DexterMailer.php`):**
  - Encapsulamento do PHPMailer com autenticação SMTP, TLS e DKIM.
  - Renderização automática do corpo do e-mail com layout responsivo do template Lee Munroe em Twig.
  - Opção de envio síncrono ou despacho assíncrono para o *Dark Passenger*.

---

### 🧩 Bloco 5: Módulos Pluggáveis (`/modules/`)
- [ ] **5.1. ModuleLoader (`core/Modules/ModuleLoader.php`):**
  - Varredura de manifestos `module.json` em `/modules/`.
  - Execução dos bootstrappers `ModuleServiceProvider.php`.
  - Isolamento de falhas: se um módulo falhar, o core não quebra.

---

### 🎨 Bloco 6: Frontend, Painel Mantis & Autenticação OAuth (Prioridade Média)
- [ ] **6.1. Compilação SASS Mantis:**
  - Importação dos fontes SASS do Mantis Dashboard Bootstrap sem bibliotecas extras.
  - Configuração do pipeline de build SASS gerando `frontend/assets/css/bootstrap.css` e `bootstrap-theme-custom.css`.
- [ ] **6.2. Autenticação Administrativa OAuth 2.0:**
  - Gerenciador de provedores (`backend/Services/Auth/OAuthManager.php`).
  - Suporte aos 6 provedores (Google, Microsoft, Azure M365 Corporativo com Tenant, Twitch, Discord, LinkedIn).
  - Tela de login dinâmica em Twig (`frontend/views/auth/login.twig`) renderizando apenas os provedores com chaves no `.env`.
  - Controller de Callback (`backend/Controllers/Auth/OAuthCallbackController.php`) com proteção contra CSRF via parâmetro `state`.

---

## 3. Próximo Passo Imediato
> **Próxima Ação:** Desenvolver o **Bloco 2 (DatabaseManager com suporte a Firebird e Fluent Query Builder)**, criando os conectores de banco multiconexão e os testes unitários na pasta `/testes/unitarios/` conforme a regra TDD.

