# Changelog - Dexter Framework

Todas as alterações notáveis deste projeto serão documentadas neste arquivo.

O formato é baseado em [Keep a Changelog](https://keepachangelog.com/pt-BR/1.0.0/),
e este projeto adere ao [Semantic Versioning](https://semver.org/lang/pt-BR/).

---

## [Unreleased]

### Planejado
- Implementação do Core HTTP (Router, Request, Response, ModuleLoader).
- Implementação do `Database-Manager.php` multiconexão (PostgreSQL, MySQL, SQLite, SQL Server, Firebird, MongoDB).
- Implementação do `CacheManager` unificado (phpFastCache, XCache, Valkey, Redis, Memcached, APCu, FileCache).
- Implementação do worker de filas e agendamento *The Dark Passenger* (Valkey, Redis, RabbitMQ).
- Integração do serviço de e-mail com PHPMailer e layout responsivo.
- Setup do Mantis Dashboard Bootstrap customizado com paleta 90271 e temas SASS.
- Implementação do pipeline de segurança e defesa ativa (*The Code*, GuardaIP, Security Headers).
- Criação da estrutura de módulos pluggáveis em `/modules`.

---

## [0.1.0-beta] - 2026-11-05

### Adicionado
- Especificação inicial e draft da arquitetura do **Dexter Framework** em `.agents/agent.md`.
- Diretrizes de frontend e design system customizado em `.agents/docs/Frontend_Guidelines.md`.
- Conexão e sincronização inicial com o repositório GitHub oficial.
