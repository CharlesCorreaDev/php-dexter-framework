# 📑 SPEC: Dexter Framework - Manual Técnico Global (Beta)

**Autor:** Charles Corrêa  
**Versão:** 0.1.0-beta  
**Data:** 05 de Novembro de 2026  
**Lema:** *Prático, Simples e Objetivo. Sempre siga "O Código".*

---

## 1. Visão Geral da Arquitetura

O **Dexter Framework** é um framework PHP 8.4+ moderno baseado no padrão arquitetural MVC modular, concebido para desenvolvimento de alta performance em:
- APIs RESTful e Webhooks
- Aplicações Web e Portais Corporativos
- Datalakes e Pipelines ETL (via Flow-PHP)
- Intranets e Painéis Administrativos (Mantis Dashboard Bootstrap)

A arquitetura prioriza o princípio **DRY**, a separação rígida entre camadas, a extensibilidade via módulos pluggáveis (`/modules`) e uma defesa proativa de segurança em profundidade.

---

## 2. Estrutura de Diretórios e Papéis

```
/dexter-framework
├── /app                # Application: Módulos de negócio da aplicação final
├── /backend            # Backend: Controladores, Models, Repositórios, Serviços, Rotas de API
├── /frontend           # Frontend: Views Twig, Componentes Svelte, Assets SASS/JS
│   └── /assets
│       ├── /css
│       │   ├── bootstrap.css
│       │   ├── bootstrap-theme-custom.css
│       │   └── /themes
│       │       └── /default
│       │           └── Themes.css  # Paleta 90271 (:root)
│       ├── /js
│       │   ├── bootstrap.js
│       │   └── bootstrap-theme-custom.js
│       └── /scss
├── /core               # Núcleo inviolável: Router, Request, Response, Container DI, ModuleLoader
├── /modules            # Módulos Pluggáveis: Extensões independentes sem alteração no core
├── /config             # Configurações centralizadas (DB, Cache, Filas, App, Módulos)
├── /database           # Migrations, Seeds e Database-Manager.php
├── /storage            # Logs JSON centralizados, cache de arquivos, uploads (Bay Harbor)
├── /docs               # Documentação técnica e registros de arquitetura (ADRs)
├── /bridges            # Conectores prontos para CMS/Frameworks externos (WordPress, Flow-PHP)
├── /testes             # Suíte de testes isolados (unitários, integração, E2E, manuais)
├── composer.json       # Dependências PHP gerenciadas via Composer
└── docker-compose.yml  # Ambiente de containers para desenvolvimento e produção
```

---

## 3. Matriz Tecnológica

| Componente | Tecnologia / Ferramenta | Detalhes |
|---|---|---|
| **Linguagem Backend** | PHP 8.4+ | Tipagem estrita, Enums, Attributes, Readonly classes, Match expressions |
| **Gerenciador de Pacotes** | Composer | PSR-4 autoloading, dependências auditadas |
| **Containers** | Docker & Docker Compose | Ambientes isolados para app, banco, cache e workers |
| **Banco de Dados** | `Database-Manager.php` (PDO) | PostgreSQL, MySQL, SQLite, SQL Server, **Firebird**, MongoDB |
| **Cache Unificado** | `CacheManager` | phpFastCache, XCache, Valkey, Redis, Memcached, APCu, FileCache próprio |
| **Filas e Workers** | *The Dark Passenger* | Valkey, Redis e RabbitMQ com agendador cron interno |
| **E-mails Transacionais**| PHPMailer | SMTP autenticado + layout responsivo [leemunroe](https://github.com/leemunroe/responsive-html-email-template) |
| **Template Engine** | Twig 3.x | Herança de templates, escape contextual automático contra XSS |
| **Reatividade Frontend**| HTMX + Svelte | Transições leves via HTMX; ilhas interativas de estado via Svelte |
| **Painel de Controle** | Mantis Dashboard Bootstrap | Tema Light, compilação exclusiva em SASS, paleta corporativa 90271 |
| **Design System** | Bootstrap 5.3 + Custom SASS | Variações completas de cores (primary, secondary, terciary, tons light/dark) |
| **Qualidade & SAST** | PHPStan, phpcs, Progpilot, Sonar-PHP | Análise estática nível 8+, aderência a PSR-12/PER e varredura de falhas |

---

## 4. Componentes Centrais do Core

### 4.1. Core HTTP
- **Router:** Despachante veloz de rotas HTTP (GET, POST, PUT, PATCH, DELETE, OPTIONS). Suporte a parâmetros tipados, grupos de rotas e middlewares de pipeline.
- **Request / Response:** Implementação desacoplada compatível com princípios PSR-7 / PSR-15, encapsulando sanitização de entradas, uploads e emissão estruturada de respostas (JSON, HTML Twig, XML, downloads).
- **Injeção de Dependências (Container DI):** Resolução automática via autowiring, permitindo substituição transparente de serviços sem acoplamento.

### 4.2. Database Manager Multiconexão
- Conexões sob demanda ou pooling para múltiplos motores simultâneos.
- Transações seguras com rollback automático em caso de exceções.
- Fluent Query Builder obrigatório nos repositórios para evitar SQL injection e manter portabilidade entre dialetos SQL.

### 4.3. Cache Manager com Controle Fino
- TTL dinâmico por item e agrupamento por namespaces/tags.
- Invalidação cirúrgica por módulo.
- FileCache próprio com bloqueio atômico de leitura/escrita e drivers distribuídos de alta vazão (Valkey/Redis).

### 4.4. The Dark Passenger (Workers e Cronjobs)
- Processamento não-bloqueante de tarefas pesadas (envio de e-mails PHPMailer, pipelines ETL Flow-PHP, geração de relatórios).
- Retry policy com backoff exponencial para falhas temporárias.
- Logging centralizado de execuções na pasta `/storage/logs`.

---

## 5. Módulos Pluggáveis (`/modules`)
- O `ModuleLoader` no core descobre e carrega extensões que implementem o contrato `ModuleServiceProvider.php`.
- Nenhuma alteração no código do `/core` é permitida para adicionar features de terceiros ou novos serviços.
- Habilitação, ordenação e desativação centralizadas em `config/modules.php`.

---

## 6. Governança e Regras de Engenharia
- **Code Mode (Code-as-Action):** Desenvolvimento conduzido com base em inspeção e código executável autoverificado.
- **Anti-Alucinação:** Proibido inventar métodos, tabelas ou variáveis não documentados.
- **Testes Obrigatórios:** Todo novo serviço ou controller é validado na pasta `/testes` antes da publicação.
- **Aprovação de Commits:** Commits e pushes exigem autorização explícita do desenvolvedor.
