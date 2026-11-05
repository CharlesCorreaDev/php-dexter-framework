# Memória da Sessão: Inicialização e Especificação do Dexter Framework

**Data:** 2026-11-05  
**Autor:** Charles Corrêa  
**Status:** Concluído  
**Versão Alvo:** 0.1.0-beta  

---

## 1. Contexto e Objetivos da Sessão
Inicialização oficial do repositório Git e sincronização com o GitHub remoto (`https://github.com/CharlesCorreaDev/php-dexter-framework.git`).
Substituição e expurgo completo de documentações herdadas do ecossistema legado (Jiraiya, JAC, Roleta, WebFramework, Latte), estabelecendo o **Dexter Framework** como um framework PHP 8.4+ moderno, modular, de alta performance e seguro por padrão.

---

## 2. Decisões Arquiteturais e Pilares Estabelecidos
1. **Padrão MVC Modular:** Separação rígida de camadas em `/app`, `/backend`, `/frontend`, `/core`, `/modules`, `/database`, `/storage`, `/testes`, `/bridges`.
2. **Database Manager Multiconexão (`Database-Manager.php`):** Suporte nativo a PostgreSQL, MySQL/MariaDB, SQL Server, SQLite, MongoDB e **Firebird** (`pdo_firebird`). Proibição de SQL puro nos repositórios (uso mandatório de Fluent Query Builder).
3. **Padrões Rígidos de Banco de Dados (`SQL.md`):**
   - Idioma português do Brasil (`snake_case`) para tabelas, colunas, views e triggers.
   - Fuso horário oficial de Brasília (`America/Sao_Paulo` / UTC-3) forçado no PHP e nas sessões SQL.
   - Otimização desde a concepção (momento zero): Partições (Range/List/Hash), índices compostos e triggers de auditoria criados juntos com a tabela.
   - Protocolo de Migrations: Versionadas, cronológicas, idempotentes, com métodos `executar` e `reverter` e suporte a deploy zero-downtime.
4. **Cache Manager com Controle Granular:** Drivers para phpFastCache, XCache, Valkey, Redis, Memcached, APCu, Dragonfly, OPcache e FileCache próprio. Controle fino de TTL, prefixação, tags e portas.
5. **Worker e Tarefas Assíncronas (*The Dark Passenger*):** Fila de mensageria com suporte a Valkey, Redis e RabbitMQ + agendador cron interno.
6. **E-mails Transacionais:** PHPMailer com layout responsivo do template oficial `leemunroe/responsive-html-email-template` renderizado via Twig 3.x e despachado opcionalmente em segundo plano pelo *Dark Passenger*.
7. **Frontend, Mantis Dashboard e Design System:**
   - Baseado no Mantis Bootstrap Admin (Light Theme), limpo de bibliotecas extras, mantendo apenas compilação SASS.
   - Paleta corporativa 90271: `#F2F5F9`, `#B6C4E0`, `#869DCC`, `#5772AC` (Terciary), `#3B5998` (Primary), `#224389` (Secondary), `#14306B`, `#0C1C40`.
   - Variações obrigatórias de componentes (base: primary, secondary, terciary, danger, info, warning, success, light, dark; tons: -light e -dark).
   - Arquitetura de arquivos: `bootstrap.css`/`bootstrap.js`, `bootstrap-theme-custom.css`/`bootstrap-theme-custom.js` e temas isolados em `themes/<tema>/Themes.css` (começando com `/default/Themes.css`).
8. **Telemetria e Analytics em Componentes:** Atributos declarativos `data-dx-*` e camada `DexterAnalytics` em JS preparados para GA4, Umami, Matomo, Plausible, PostHog e Mixpanel.
9. **Módulos Pluggáveis (`/modules`):** Arquitetura desacoplada onde módulos independentes contêm seu próprio manifesto `module.json` e `ModuleServiceProvider.php`, sem violar o core.
10. **Segurança em Profundidade (*The Code*):** Cartilha Paragon Initiative, defesa de perímetro (`.htaccess`, blacklist `myip.ms`, GuardaIP e Stop Forum Spam), rate limiting distribuído (Valkey/Redis), defesas ativas (honeypots, blackhole, telemetria comportamental), security headers padronizados e ferramental SAST.
11. **Modo Code Mode (Code-as-Action):** Regra obrigatória para agentes de IA atuarem com código autoverificável, testes prévios e inspeção programática direta.

