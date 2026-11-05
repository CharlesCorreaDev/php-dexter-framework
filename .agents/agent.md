# Documentação de Desenvolvimento: Dexter Framework

**Autor:** Charles Corrêa  
**Data:** 05 de Novembro de 2026  
**Versão:** 0.1.0-beta (Versão Beta / Draft de Especificação)  
**Lema:** *Prático, Simples e Objetivo. Sempre siga "O Código".*

---

## 1. Visão Geral
O **Dexter Framework** é um framework PHP moderno (8.4+) baseado no padrão MVC, projetado para a criação de aplicações web, APIs, datalakes, intranets, painéis de controle e sites públicos. O projeto encontra-se atualmente em estágio de **desenvolvimento Beta (v0.1.0-beta)**, priorizando testes exaustivos, validação modular, segurança proativa desde a concepção e arquitetura desacoplada. Sua arquitetura é modular, separando claramente as responsabilidades de Backend, Frontend e Application, garantindo manutenção, escalabilidade e aderência estrita ao princípio DRY (Don't Repeat Yourself).

---

## 2. Base de Conhecimento e Diretrizes (`docs/`)

Para guiar os agentes de IA e desenvolvedores no cumprimento das diretrizes de arquitetura, segurança e engenharia, consulte a documentação detalhada localizada em [docs/](docs/):

- **Arquitetura & Design:**
  - [Architecture-Decision-Records-(ADR).md](docs/Architecture-Decision-Records-(ADR).md) — Registros de decisões arquiteturais.
  - [MVC.md](docs/MVC.md) — Padrão MVC e separação de camadas.
  - [FLOW_PATTERNS.md](docs/FLOW_PATTERNS.md) — Padrões de fluxo de dados e execução.
  - [Dont-Repeat-Yourself.md](docs/Dont-Repeat-Yourself.md) — Regra DRY aplicada ao framework.
  - [SPEC.md](docs/SPEC.md) — Especificações detalhadas do projeto.
- **Engenharia & Padrões:**
  - [Engineering-Playbook.md](docs/Engineering-Playbook.md) — Boas práticas de engenharia e desenvolvimento.
  - [Frontend_Guidelines.md](docs/Frontend_Guidelines.md) — Diretrizes de UI/UX, Twig, Svelte, HTMX e SASS.
  - [Security.md](docs/Security.md) — Padrões de segurança rigorosos (sanitização, autenticação, CSRF, mitigação de vulnerabilidades).
- **Dados & Banco de Dados:**
  - [PDO.md](docs/PDO.md) — Práticas e padrões para PDO e `Database-Manager.php`.
  - [SQL.md](docs/SQL.md) — Convenções para consultas, migrations e modelagem.
- **Versionamento, CI/CD & Processos:**
  - [Git.md](docs/Git.md) & [Git-GitHub.md](docs/Git-GitHub.md) — Fluxo Git, commits, branches e pull requests.
  - [Azure-DevOps.md](docs/Azure-DevOps.md) — Pipelines e automações.
  - [Commands.md](docs/Commands.md) — Comandos úteis e utilitários de CLI.
  - [CHANGELOG.md](docs/CHANGELOG.md) — Histórico de mudanças.
  - [Versionamento-Semantico.md](docs/Versionamento-Semantico.md) — Padrão de versionamento (SemVer).

---

## 3. Regras Absolutas (Não Negociáveis)

### ❌ 1. Proibido commit sem aprovação explícita
Nunca execute `git commit`, `git push` ou `git tag` sem que o usuário diga explicitamente "pode commitar" ou "pode publicar". Apresente o que será commitado e aguarde confirmação.

### ❌ 2. Proibido editar `vendor/`
Nunca modifique bibliotecas ou arquivos dentro de `vendor/`. Personalizações via injeção de dependência / definições de container ou criando módulos próprios.

### ❌ 3. Proibido inventar o que não existe (Anti-Alucinação)
- Proibido inventar tabelas, colunas, endpoints, métodos ou classes sem verificar o código existente.
- Proibido inventar configurações: use apenas as chaves documentadas em `.env`.
- Antes de usar qualquer classe ou método: verificar no repositório. Se não existir, informar o usuário, propor a criação e aguardar aprovação.
- Quando não souber: dizer explicitamente **"Não sei / preciso verificar"** ao invés de inventar.

### ❌ 4. Proibido SQL puro nos repositórios
Usar sempre Fluent Query Builder. `raw_query` com PDO preparado é o último recurso justificado.

### ❌ 5. Proibido nomes de tabelas ou campos em inglês
Todo o banco utiliza nomenclatura em português do Brasil (`snake_case`).

### ❌ 6. Proibido aplicar código sem testar primeiro
Validar sempre o código em ambiente de testes antes de aplicar no core ou produção.

### ❌ 7. Idioma e Fuso Horário: Sempre pt-BR e Horário de Brasília (`America/Sao_Paulo`)
- **Idioma:** Respostas, mensagens de sistema, validações, comentários no código, nomes de variáveis e documentação estritamente em Português do Brasil (pt-BR). Exceção apenas para termos técnicos sem tradução consagrada (*middleware*, *trigger*, *endpoint*).
- **Fuso Horário (Timezone):** Todo o sistema (PHP `date_default_timezone_set('America/Sao_Paulo')`, containers Docker, agendadores do *Dark Passenger* e instâncias de banco de dados via conexão `SET time_zone = '-03:00'` / `SET timezone TO 'America/Sao_Paulo'`) opera obrigatoriamente no **Fuso Horário Oficial de Brasília (`America/Sao_Paulo` / UTC-3)**.

### ❌ 8. Proibido usar caminhos absolutos nos arquivos do projeto
Use sempre caminhos relativos. Nunca escreva `C:\`, `D:\` ou `/home/user/` dentro de arquivos de configuração, código ou documentação.

### ⚡ 9. Uso Obrigatório do Modo Code Mode (Code-as-Action)
Todo agente de IA operando no Dexter Framework deve obrigatoriamente atuar no padrão **Code Mode (Code-as-Action)** em todo o desenvolvimento:
- Tratar o código como o principal meio de ação, inspeção e validação do ambiente.
- Inspecionar arquivos reais, executar comandos programáticos de checagem/testes e aplicar alterações diretas via ferramentas de código, ao invés de supor estados ou responder apenas teoricamente.
- Escrever código executável, tipado estritamente (PHP 8.4+), autoverificável e acompanhado de testes antes da entrega.

### 📝 10. Cabeçalho Obrigatório em Todos os Arquivos PHP
Todo novo arquivo PHP criado deve conter o seguinte bloco de cabeçalho padronizado imediatamente após a tag `<?php`, preenchido dinamicamente com os dados do projeto e do desenvolvedor:

```php
/*
* @author	Charles Corrêa <charlescorreaweb@gmail.com>
* @copyright	Copyright ( c ) 2026
* @app		Dexter Framework
* @version	0.1.0-beta
*
* +------------------------------------------------------------------------------------------------------------+
* | Criação e Coordenação Projeto : Charles Corrêa <charlescorreaweb@gmail.com>                                |
* | Desenvolvimento: Charles Corrêa <charlescorreaweb@gmail.com>                                               |
* | Layout e Personalizações: Charles Corrêa <charlescorreaweb@gmail.com>                                      |
* | Ajustes: Charles Corrêa <charlescorreaweb@gmail.com>                                                       |
* +------------------------------------------------------------------------------------------------------------+
*/
```
- **Campos Dinâmicos:**
  - `@copyright`: Sempre o ano atual corrente (`2026`).
  - `@app`: Nome da aplicação configurado (padrão `Dexter Framework` ou variável `APP_NAME`/`API_NAME` do `.env`).
  - `@version`: Versão atual do projeto em desenvolvimento (ex: `0.1.0-beta`).
  - Blocos de autoria e equipe: Preenchidos com `Charles Corrêa <charlescorreaweb@gmail.com>` (ou equipe designada).

---

## 4. Protocolo Grill-Me, Handoff, Memória, Governança e Skills Operacionais

### Consulta Obrigatória de Handoff e Memória
Antes de iniciar qualquer nova sessão, tarefa ou planejamento:
1. **Consultar obrigatoriamente a pasta de Handoff ([`.agents/handoff/`](handoff/)):**
   - Ler o arquivo [`tarefas_pendentes.md`](handoff/tarefas_pendentes.md) para analisar o estado atual, tarefas pendentes priorizadas e próximos passos.
2. **Consultar obrigatoriamente a pasta de Memória ([`.agents/memory/`](memory/)):**
   - Ler `memory/sessoes/` e `memory/implementacoes/` para verificar decisões anteriores, contratos já implementados e lições aprendidas, evitando retrabalho ou alucinações.

### 🛠️ Matriz de Uso Mandatório das Skills Especializadas
O agente de IA deve obrigatoriamente acionar e respeitar as skills locais para cada fase do ciclo de desenvolvimento:

| Fase / Necessidade | Skill Obrigatória | Ação Executada pelo Agente |
|---|---|---|
| **Alinhamento & Dúvidas** | [`grill-me`](skills/grill-me/SKILL.md) / [`to-questionnaire`](skills/to-questionnaire/SKILL.md) | Entrevistar o desenvolvedor uma pergunta por vez ou gerar questionários objetivos com opções recomendadas. |
| **Comportamento Inesperado** | [`wait-what`](skills/wait-what/SKILL.md) | Pausa analítica imediata em português: explica a discrepância antes de tentar consertos às cegas. |
| **Escrita de Código PHP** | [`php-dev-expert`](skills/php-dev-expert/SKILL.md) | Aplicação estrita de PHP 8.4+, boas práticas de POO, MVC e mitigação de vulnerabilidades (PHP2Shell). |
| **Revisão de Código** | [`code-review-estruturado`](skills/code-review-estruturado/SKILL.md) | Checklist estruturado de code review focado em legibilidade, concorrência, segurança e DRY. |
| **Organização de Arquivos** | [`file-organizer`](skills/file-organizer/SKILL.md) | Estruturação consistente de pastas e arquivos taxonômicos sem espalhar arquivos soltos. |
| **Redação Técnica & Specs** | [`writing-for-agents`](skills/writing-for-agents/SKILL.md) | Otimização de documentos usando sempre `.agents/agent.md` como base canônica sem redundância. |
| **Criação de Novas Skills** | [`skill-creator`](skills/skill-creator/SKILL.md) | Estruturação padronizada de novas capacidades para o ecossistema de agentes. |
| **Navegação Arquitetural** | [`graphify`](skills/graphify/SKILL.md) | Consulta ao grafo de nós e relacionamentos antes de alterar contratos do Core. |
| **Setup & Code Mode** | [`claude-code-setup`](skills/claude-code-setup/SKILL.md) | Garantir Code Mode (Code-as-Action), cabeçalhos obrigatórios, caminhos relativos e fuso de Brasília. |
| **Persistência de Memória** | [`claude-mem`](skills/claude-mem/SKILL.md) | Sincronização contínua entre sessões no `.agents/memory/` e Claude Mem. |
| **Agrupamento de Commits** | [`commit-work`](skills/commit-work/SKILL.md) | Seleção e criação de commits atômicos, claros e seguindo Conventional Commits. |
| **Documentação de Versão** | [`changelog-generator`](skills/changelog-generator/SKILL.md) | Atualização das notas de versão em `.agents/docs/CHANGELOG.md`. |
| **Pull Requests** | [`skills-pr`](skills/skills-pr/SKILL.md) | Elaboração de PRs com resumo visual, prova de funcionamento e raio de impacto (*blast radius*). |
| **Otimização de Tokens** | [`caveman`](skills/caveman/SKILL.md) | Comunicação densa, direta e sem floreios gramaticais para poupar tokens quando solicitado. |
| **Transição de Sessão** | [`handoff`](skills/handoff/SKILL.md) | Atualização de `.agents/handoff/tarefas_pendentes.md` ao final da sessão com o próximo passo claro. |

### 🔄 Sincronização Obrigatória Pós-Tarefa (Memória ⇄ Handoff)
Após a conclusão de **qualquer tarefa, feature, refatoração ou correção de bug**, o agente de IA deve obrigatoriamente:
1. **Atualizar `.agents/memory/`:**
   - Registrar a implementação em `memory/implementacoes/AAAA-MM-DD_feature.md` e/ou resumo em `memory/sessoes/AAAA-MM-DD_topico.md`.
   - **Regra Mandatória da Memória:** Todo arquivo em `memory/` deve conter explicitamente a diretriz:  
     👉 *"Consulte e revise sempre [.agents/handoff/tarefas_pendentes.md](../handoff/tarefas_pendentes.md) para analisar as tarefas pendentes e o próximo passo imediato do roadmap."*
2. **Atualizar e Sincronizar `.agents/handoff/tarefas_pendentes.md`:**
   - Marcar itens concluídos com `[x]`.
   - Incluir novas pendências técnicas ou de arquitetura descobertas.
   - Atualizar a seção *"Próximo Passo Imediato"* para orientar com precisão o agente da próxima tarefa/sessão.

### Memória do Projeto (`.agents/memory/`)
Registros contínuos mantidos em:
- `memory/sessoes/`: `AAAA-MM-DD_topico.md` — Resumos de sessões e decisões (com ponte para handoff).
- `memory/erros/`: `AAAA-MM-DD_descricao.md` — Registro de bugs, causa raiz e soluções.
- `memory/implementacoes/`: `AAAA-MM-DD_feature.md` — Histórico de features e arquivos alterados (com ponte para handoff).

### Registros de Decisões Arquiteturais (ADR)
Salvar em `docs/adr/ADR-XXX-nome-kebab-case.md` para qualquer nova biblioteca, alteração de schema, quebra de contrato de API ou protocolo de segurança.

---

## 5. Arquitetura e Estrutura de Diretórios

```
/dexter-framework
├── /app                # Application: Módulos de negócio, regras específicas da aplicação
├── /backend            # Backend: Controladores, Models, Serviços, API Routes
├── /frontend           # Frontend: Views (Twig), Componentes (Svelte), Assets (SASS, JS)
│   └── /assets
│       ├── /css
│       │   ├── bootstrap.css
│       │   ├── bootstrap-theme-custom.css
│       │   └── /themes
│       │       └── /default
│       │           └── Themes.css  # Variáveis de temas (default, midnight, red-monza...)
│       ├── /js
│       │   ├── bootstrap.js
│       │   └── bootstrap-theme-custom.js
│       └── /scss
├── /core               # Núcleo do framework: Router, Request, Response, Module Loader
├── /modules            # Módulos Pluggáveis: Extensões independentes sem tocar no core (ETL, Gateways, Integrações)
├── /config             # Configurações centralizadas (DB, Cache, App, Modules)
├── /database           # Migrations, Seeds e a classe Database-Manager.php
├── /storage            # Logs centralizados, cache de arquivos, uploads (Bay Harbor)
├── /docs               # Documentação gerada (estilo phpDoc) e ADRs
├── /bridges            # Conexões prontas para CMS/Frameworks externos
├── /testes             # Suíte de testes isolados (unitários, integração e manuais)
├── composer.json       # Gerenciamento de dependências
└── docker-compose.yml  # Ambiente de desenvolvimento e publicação em containers
```

---

## 6. Stack Tecnológico Principal

- **Backend:** PHP 8.4+
- **Gerenciador de Dependências:** Composer
- **Ambiente:** Docker (Desenvolvimento e Produção)
- **Frontend:** Bootstrap 5.3, HTMX, Svelte, Twig, SASS
- **Painel Administrativo:** Mantis Dashboard Bootstrap (tema light customizado, sem dependências externas extras exceto SASS).
- **Tipografia:**
  - **Textos:** Google Sans (fallback: Inter)
  - **Títulos:** Google Sans Flex (fallback: Titillium Web)
  - **Monospace:** Google Sans Code (fallback: DM Mono)
- **Repositório:** GitHub ([php-dexter-framework](https://github.com/CharlesCorreaDev/php-dexter-framework.git))

---

## 7. Componentes Centrais (Core)

### 7.1. Database Manager (`Database-Manager.php`)
Classe PHP multiconexão baseada em PDO, com suporte a transações e conexões simultâneas ou sob demanda:
- **Motores Relacionais:** PostgreSQL, MySQL, SQLite, SQL Server e **Firebird** (`pdo_firebird`).
- **Motores NoSQL:** MongoDB (driver oficial / adapter).
- **Recursos:** Pool de conexões, reconexão automática e fallback inteligente em caso de falha.
- **Regra:** Entidades apenas transportam dados; Repositórios utilizam Fluent Query Builder. SQL puro proibido.

### 7.2. Cache Manager
Sistema de cache robusto e unificado baseado em padrão Adapter / Factory:
- **Drivers e Motores:** phpFastCache, XCache, Valkey, Redis, Memcached, APCu, Dragonfly, OPcache e **sistema de cache próprio em arquivos (File Cache)**.
- **Controles Granulares:**
  - Tempo de vida flexível (*TTL* / expiração por item e por namespace).
  - Gestão e prefixação de tipos de chaves (nomes, tags, grupos e invalidação seletiva).
  - Configuração de portas, sockets, hosts, timeouts e autenticação dos serviços de cache.
  - Cache tagging e purga automática atrelada ao ciclo de vida dos módulos.

### 7.3. Gerenciamento de Tarefas e Filas (*"The Dark Passenger"*)
- **Message Queues:** Suporte unificado a **Valkey**, **Redis** e **RabbitMQ** para processamento assíncrono e execução de tarefas em segundo plano.
- **Cronjobs:** Agendador interno com sintaxe simples e triggers configuráveis.
- **Logs Centralizados:** Logging estruturado em JSON (`/storage/logs`) pronto para ingestão em Datalakes.

### 7.4. Serviço de E-mail Autenticado (`PHPMailer`)
- **Motor de Envio:** [PHPMailer](https://github.com/PHPMailer/PHPMailer) integrado nativamente ao ecossistema para envios transacionais e autenticados (SMTP com TLS/SSL, DKIM, SPF).
- **Template e Layout Responsivo:** Utilização do layout e estrutura do [leemunroe/responsive-html-email-template](https://github.com/leemunroe/responsive-html-email-template) como base padrão para todos os e-mails transacionais (notificações, recuperação de senhas, relatórios e alertas).
- **Integração com Twig:** Renderização dos corpos de e-mail via templates Twig (`frontend/views/emails/`), combinando o design responsivo com injeção segura de dados.
- **Processamento Assíncrono:** Integração nativa com o *Dark Passenger* para envio assíncrono em segundo plano via filas (Valkey/Redis/RabbitMQ), evitando bloqueios de I/O na requisição HTTP.

### 7.5. Geradores e Saídas
- **Dados:** Serialização veloz para JSON e XML.
- **Feeds:** Feeds dinâmicos em RSS/Atom.
- **Documentação:** Geração automatizada estilo phpDoc lendo PHP 8.4+ Attributes.

### 7.6. Frontend, SASS & Design System (Mantis Customizado)
- **Painel Administrativo:** Baseado em Mantis Dashboard Bootstrap (Light Theme), limpo de bibliotecas extras desnecessárias, operando com compilação SASS.
- **Paleta de Cores Padrão (Default Theme):**
  - `#F2F5F9` (Background / Canvas)
  - `#B6C4E0` (Bordas e divisores suaves)
  - `#869DCC` (Acentos complementares)
  - `#5772AC` (**Terciary**)
  - `#3B5998` (**Primary**)
  - `#224389` (**Secondary**)
  - `#14306B` (Destaque escuro)
  - `#0C1C40` (Títulos e contrastes profundos)
- **Regra de Variações de Componentes:** Todo componente ou botão customizado criado deve implementar todas as variações semânticas do Bootstrap e extensões do Dexter:
  - Básicos: `primary`, `secondary`, `terciary`, `danger`, `info`, `warning`, `success`, `light`, `dark`.
  - Tonalidades: `primary-light`, `primary-dark`, `secondary-light`, `secondary-dark`, `terciary-light`, `terciary-dark`.
- **Organização de Assets:**
  - `bootstrap.css` e `bootstrap.js` (estáveis / base).
  - `bootstrap-theme-custom.css` e `bootstrap-theme-custom.js` (estilizações e comportamentos do framework).
  - `themes/<tema>/Themes.css` contendo variáveis CSS isoladas por tema (ex: `/default/Themes.css`, `/midnight/Themes.css`, `/red-monza/Themes.css`).
- **Templates & Reatividade:** Twig para SSR, HTMX para hiper-mídia e transições rápidas, e Svelte para ilhas de alta interatividade de estado.

### 7.7. Autenticação Administrativa Exclusiva via OAuth 2.0 / OpenID Connect
O acesso ao painel de controle e área administrativa do Dexter é **estritamente gerenciado por provedores de identidade OAuth 2.0 / OIDC**, eliminando o armazenamento de senhas locais para administradores:

- **Provedores Suportados e Habilitáveis via Configuração (`config/oauth.php` / `.env`):**
  - **Google Identity** (`google`)
  - **Microsoft Pessoal** (`microsoft`)
  - **Microsoft 365 Corporativo / Azure Entra ID** (`microsoft-365` / `azure-entra-id`) com suporte a validação por Tenant ID
  - **Twitch** (`twitch`)
  - **Discord** (`discord`)
  - **LinkedIn OpenID** (`linkedin`)
- **Tela de Logon Dinâmica:** A interface de login renderizada em Twig (`frontend/views/auth/login.twig`) inspeciona os provedores configurados e ativos no sistema e renderiza dinamicamente apenas os botões de autenticação habilitados pelo administrador, seguindo as diretrizes visuais do Mantis e do design system.
- **Segurança e Callback:** Validação estrita do parâmetro `state` via sessão com hash anti-CSRF, vinculação segura por e-mail verificado e registro em log de auditoria no *Blood Spatter* com IP e geolocalização.

### 7.8. Rastreamento e Telemetria de UI/UX (Analytics & Event Tracking)
Todo e qualquer componente de interface (botões, links, modais, formulários, abas, paginação, menus e cards) deve ser construído preparado para **interceptação de eventos de telemetria e análise de tráfego/comportamento** (Google Analytics 4, Umami, Matomo, Plausible, PostHog, Mixpanel).

- **Data Attributes Declarativos (`data-dx-*`):** Todos os componentes interativos devem disponibilizar atributos para fácil captura automática:
  - `data-dx-event="click|submit|view|change"`: Tipo do evento a ser despachado.
  - `data-dx-category="ui|ecommerce|navigation|auth"`: Categoria semântica.
  - `data-dx-action="<acao>"`: Ação executada (ex: `button_click`, `form_submit`, `modal_open`).
  - `data-dx-label="<identificador>"`: Rótulo legível ou identificador do elemento.
  - `data-dx-value="<valor>"`: (Opcional) Valor numérico ou métrica associada.
- **Interface JavaScript Centralizada (`DexterAnalytics`):** No arquivo `bootstrap-theme-custom.js`, fornecer a camada de abstração que unifica o despacho para múltiplos coletores ativos:
  ```javascript
  DexterAnalytics.track('button_click', {
    category: 'auth',
    label: 'login_submit',
    provider_data: { ... }
  });
  ```
- **Documentações Oficiais de Referência:**
  - [Google Analytics 4 (Measurement Protocol & gtag.js)](https://developers.google.com/analytics/devguides/collection/ga4)
  - [Umami Analytics (Event Tracking)](https://umami.is/docs/track-events)
  - [Matomo JavaScript Tracking API](https://developer.matomo.org/api-reference/tracking-javascript)
  - [Plausible Custom Events](https://plausible.io/docs/custom-event-goal-conversions)
  - [PostHog Event Capture](https://posthog.com/docs/libraries/js)
  - [Mixpanel JavaScript SDK](https://developer.mixpanel.com/docs/javascript-quickstart)

---

## 8. Blindagem e Segurança Profunda (Defense in Depth)

Segurança não é adicionada no deploy, é arquitetada na raiz. O Dexter adota as diretrizes da cartilha [Paragon Initiative Enterprises (Building Secure PHP Software)](https://paragonie.com/blog/2017/12/2018-guide-building-secure-php-software) e proteção abrangente contra vulnerabilidades multi-ecossistema (PHP, Node.js, Python, TypeScript):

### 8.1. Fluxo de Verificação de IP & Defesa de Perímetro
- **Camada Web Server / `.htaccess`:** Bloqueio prévio de faixas de blacklists conhecidas (ex: `myip.ms`) e filtros geográficos de entrada quando aplicável.
- **GuardaIP Middleware:**
  - Consulta tabelas internas de IPs bloqueados antes do processamento pesado.
  - Integração com Stop Forum Spam para cadastros e autenticações.
  - Registro de auditoria detalhado de requisições.

### 8.2. Pipeline de Segurança e Mitigações
- **Prevenção Completa de Injeções & Ataques Web:** Proteção estrita contra SQL Injection (prevenção via PDO preparado + Query Builder), XSS (escape por padrão com Twig + Content Security Policy), CSRF (tokens criptograficamente seguros em todos os formulários e requisições de mutação), LFI/RFI e SSRF.
- **Proteção contra CVEs Modernas:** Mitigação rigorosa para vulnerabilidades críticas do runtime PHP (como `CVE-2026-109618` e `CVE-2026-109619` / PHP2Shell), incluindo isolamento de diretórios de upload temporário e sanitização de variáveis de servidor e uploads.
- **Proteção Anti-DDoS e Força Bruta:** Rate limiting distribuído em Redis/Valkey (ex: máximo 5 req/s em rotas sensíveis como login/recuperação).
- **Honeypots e Defesa Ativa:**
  - Campos armadilha invisíveis em formulários (ex: `x_verificacao_seguranca_email`); preenchimento acarreta banimento imediato do IP.
  - Rota e link invisível "Blackhole" no HTML para captura e bloqueio automático de scrapers e bad bots.
  - Cookie de rastreio de telemetria comportamental para navegadores anômalos.
  - Atraso exponencial (*backoff* progressivo) em falhas consecutivas de autenticação.

### 8.3. Cabeçalhos de Segurança (Security Headers)
Implementação de cabeçalhos seguros em todas as respostas HTTP (via [BePsvPT/secure-headers](https://github.com/BePsvPT/secure-headers) ou `.htaccess`):
- `X-Frame-Options: DENY`
- `X-XSS-Protection: 1; mode=block`
- `X-Content-Type-Options: nosniff`
- `Referrer-Policy: no-referrer-when-downgrade`
- `Content-Security-Policy (CSP)` rigorosa adaptada aos assets Svelte/HTMX.
- `Strict-Transport-Security (HSTS)` forçado em ambientes de produção.

---

## 9. Ecossistema de Debug, Profiling, Auditoria e Testes

O Dexter Framework prevê integração nativa e padronizada com ferramentas de diagnóstico e qualidade em cada camada:

### 9.1. Debugging e Diagnóstico em Tempo de Execução
- **Telas de Erro & Inspeção:** [Whoops](https://github.com/filp/whoops) para traces interativos em modo dev, Kint e Krumo para inspeção de dados estruturados.
- **Painéis e Barras:** PHP DebugBar para inspeção de rotas, queries, tempos e consumo de memória.
- **Diagnóstico do Motor:** Xdebug (step debugging e traces), Pinba e PHP Profiler para análise de gargalos em produção/homologação.
- **CLI & Logs:** Suporte a PHP Interactive Shell e roteamento customizado do PHP Error Log em formato estruturado.

### 9.2. Análise Estática, Qualidade e Varredura de Vulnerabilidades
- **Análise Estática de Código:** PHPStan (nível 8+ / max), Exakat e [SonarSource sonar-php](https://github.com/SonarSource/sonar-php).
- **Padronização de Código (Code Style):** PHP_CodeSniffer (`phpcs`) e `phpcbf` aplicando regras PSR-12/PER.
- **Auditoria de Vulnerabilidades & SAST:**
  - `phpcs-security-audit` e [Progpilot](https://github.com/designsecurity/progpilot) para detecção de falhas de segurança no código PHP.
  - [SensioLabs Security-Checker](https://github.com/sensiolabs/security-checker) e verificação do [Symfony Security Advisories](https://security.symfony.com/).
  - [Roave SecurityAdvisories](https://github.com/Roave/SecurityAdvisories) e [FriendsOfPHP security-advisories](https://github.com/FriendsOfPHP/security-advisories) nas dependências do Composer.
  - [PHP Malware Detector](https://github.com/ollyxar/php-malware-detector) para análise de integridade e scripts suspeitos.
  - Integração com [Snyk Open Source Security](https://snyk.io/product/open-source-security-management/).

### 9.3. Pirâmide de Testes Automatizados
Todo código é validado antes de ir para a base principal:
```
testes/
├── unitarios/     # PHPUnit e Mockery para testes unitários de classes e serviços
├── integracao/    # Codeception / Behat para testes de integração, rotas e banco
├── e2e/           # Selenium + php-webdriver e automação mabl para fluxos de UI
└── manuais/       # Scripts e requisições cURL para testes rápidos de API
```

---

## 10. Arquitetura de Módulos Pluggáveis (`/modules/`)

Para garantir que o core do framework permaneça limpo, inviolável e facilmente atualizável, recursos de terceiros, integrações de serviços, rotinas de importação/exportação (ETL), gateways e ferramentas auxiliares devem ser implementados como **Módulos Independentes** dentro do diretório `/modules`.

### 10.1. Estrutura de um Módulo
Cada módulo é autossuficiente e segue o contrato padrão do framework:

```
/modules/<nome-do-modulo>/
├── module.json         # Manifesto do módulo (nome, versão, autor, dependências, rotas, hooks)
├── ModuleServiceProvider.php # Bootstrapper do módulo (registro de rotas, eventos, DI)
├── /Controllers        # Controladores específicos do módulo
├── /Services           # Regras de negócio, integrações externas (APIs, ETL, exportadores)
├── /Views              # Templates Twig próprios do módulo (opcional)
├── /Config             # Configurações padrão do módulo
└── /Migrations         # Migrations de banco necessárias para o módulo
```

### 10.2. Ciclo de Vida e Instalação de Módulos
1. **Sem Modificação no Core:** O `ModuleLoader` no núcleo (`/core`) varre a pasta `/modules/` e identifica os diretórios que possuem um manifesto `module.json` válido e ativo.
2. **Registro via Service Provider:** O `ModuleServiceProvider` é instanciado e registra automaticamente:
   - Rotas específicas protegidas no `Router`.
   - Injeções de dependência no container DI.
   - Tarefas em segundo plano e filas (*Dark Passenger*).
   - Listeners de eventos e ganchos de ciclo de vida (*hooks*).
3. **Casos de Uso Típicos de Módulos:**
   - **Integração de Serviços:** Gateways de pagamento, envio de notificações (SMS, WhatsApp, E-mail), autenticações OAuth.
   - **Importação e Exportação de Dados:** Conectores com Flow-PHP, geradores de relatórios CSV/Excel/PDF, ingestão automatizada em Datalakes.
   - **Conectores de CMS / Ferramentas:** Bridges específicas ativadas sob demanda.
4. **Isolamento e Segurança:** Se um módulo apresentar falhas ou for desativado no `config/modules.php`, o core do sistema continua operando sem interrupções.

---

## 11. Pontes e Integrações (*"The Bridges"*)
- **WordPress / Joomla:** Pontes para compartilhamento de sessão, autenticação e sincronização de dados.
- **Flow-PHP:** Pipelines de ETL velozes para ingestão direta no Datalake.
- **Painéis de Administração Auxiliares:** Módulos de proteção e proxy para phpMyAdmin e phpMemcachedAdmin.

---

## 12. Skills Integradas ao Projeto (`.agents/skills/`)

O repositório possui uma suíte integrada de skills para guiar a operação, arquitetura, testes e memória de agentes de IA:

| Skill | Localização | Finalidade |
|---|---|---|
| **Graphify** | [.agents/skills/graphify/](.agents/skills/graphify/SKILL.md) | Grafo de conhecimento de arquitetura, relações entre módulos, detecção de nós centrais e navegação AST. |
| **Claude Mem** | [.agents/skills/claude-mem/](.agents/skills/claude-mem/SKILL.md) | Persistência de memória contínua, governança de decisões e sincronização com `.agents/memory/`. |
| **Claude Code Setup** | [.agents/skills/claude-code-setup/](.agents/skills/claude-code-setup/SKILL.md) | Diretrizes operacionais para Claude Code CLI, regras de Code Mode, cabeçalhos PHP e caminhos relativos. |
| **Grill-Me** | [.agents/skills/grill-me/](.agents/skills/grill-me/SKILL.md) | Entrevista técnica implacável antes de codificar, resolvendo ambiguidades uma a uma. |
| **Handoff** | [.agents/skills/handoff/](.agents/skills/handoff/SKILL.md) | Compactação e passagem de bastão de contexto limpo para novos agentes ou sessões. |
| **To-Questionnaire** | [.agents/skills/to-questionnaire/](.agents/skills/to-questionnaire/SKILL.md) | Conversão de problemas abertos em questionários objetivos de múltipla escolha com opções recomendadas. |
| **Peraí, o que houve? (Wait-What)** | [.agents/skills/wait-what/](.agents/skills/wait-what/SKILL.md) | Pausa analítica e descompactação de raciocínio em português frente a comportamentos inesperados. |
| **Writing for Agents** | [.agents/skills/writing-for-agents/](.agents/skills/writing-for-agents/SKILL.md) | Guia de escrita de documentação para agentes usando sempre o `agent.md` como base canônica. |
| **Skills PR** | [.agents/skills/skills-pr/](.agents/skills/skills-pr/SKILL.md) | Estruturação de Pull Requests com prova de funcionamento e análise de raio de impacto (*blast radius*). |
| **Codebase Design** | [.agents/skills/codebase-design/](.agents/skills/codebase-design/SKILL.md) | Módulos profundos (*deep modules*), fronteiras desacopladas e inversão de dependência. |
| **Domain Modeling** | [.agents/skills/domain-modeling/](.agents/skills/domain-modeling/SKILL.md) | Linguagem ubíqua em pt-BR, imutabilidade em PHP 8.4+ (`readonly classes`) e integridade de domínio. |
| **Grilling** | [.agents/skills/grilling/](.agents/skills/grilling/SKILL.md) | Desafio aprofundado de hipóteses técnicas (falhas de rede, fallbacks, memória, concorrência). |
| **TDD** | [.agents/skills/tdd/](.agents/skills/tdd/SKILL.md) | Ciclo Red-Green-Refactor estrito: código só entra na base se acompanhado de teste passando em `/testes`. |
| **PHP Developer Expert** | [.agents/skills/php-dev-expert/](.agents/skills/php-dev-expert/SKILL.md) | Especialista sênior no ecossistema PHP (7.4 a 8.5), mitigação a CVEs críticas (PHP2Shell), POO moderna, MVC, documentações completas de frameworks, servidores e CMS. |
| **Code Review Estruturado** | [.agents/skills/code-review-estruturado/](.agents/skills/code-review-estruturado/SKILL.md) | Checklist estruturado de code review focado em legibilidade, performance, segurança e arquitetura. |
| **Design de API RESTful** | [.agents/skills/design-api-restful/](.agents/skills/design-api-restful/SKILL.md) | Boas práticas de modelagem de endpoints, verbos HTTP, idempotência e códigos de status. |
| **System Prompt Creator** | [.agents/skills/system-prompt-creator/](.agents/skills/system-prompt-creator/SKILL.md) | Metodologia de criação e refinamento de prompts para agentes de IA especializados. |
| **Testes Unitários Framework** | [.agents/skills/testes-unitarios-framework/](.agents/skills/testes-unitarios-framework/SKILL.md) | Framework de escrita de testes unitários confiáveis e isolamento de dependências. |
| **Caveman Suite** | [.agents/skills/caveman/](.agents/skills/caveman/SKILL.md) | Otimização semântica, compressão de tokens e execução cirúrgica (caveman, cavecrew, commit, compress). |
| **Ponytail Suite** | [.agents/skills/ponytail/](.agents/skills/ponytail/SKILL.md) | Gerenciamento de débitos técnicos, auditoria, revisão e ganhos incrementais de arquitetura. |
| **Headroom** | [.agents/skills/headroom/](.agents/skills/headroom/SKILL.md) | Gestão de espaço de contexto e preservação de memória de trabalho. |
| **Compact Service** | [.agents/skills/compact-service/](.agents/skills/compact-service/SKILL.md) | Prompt research e serviços de compactação semântica de contexto. |
| **Commit Work** | [.agents/skills/commit-work/](.agents/skills/commit-work/SKILL.md) | Automação e agrupamento atômico de commits estruturados via Conventional Commits. |
| **PR Description Writing** | [.agents/skills/pr-description-writing/](.agents/skills/pr-description-writing/SKILL.md) | Redação orientada a contexto e testes para Pull Requests. |
| **Changelog Generator** | [.agents/skills/changelog-generator/](.agents/skills/changelog-generator/SKILL.md) | Geração automatizada de notas de versão e changelogs em formato Keep a Changelog. |
| **File Organizer** | [.agents/skills/file-organizer/](.agents/skills/file-organizer/SKILL.md) | Organização e padronização taxonômica de diretórios e arquivos de assets. |
| **Skill Creator & Template** | [.agents/skills/skill-creator/](.agents/skills/skill-creator/SKILL.md) | Ferramental para criação rápida, empacotamento e templates de novas skills de IA. |
| **Webapp Testing** | [.agents/skills/webapp-testing/](.agents/skills/webapp-testing/SKILL.md) | Metodologia e testes integrados para validação de aplicações web e interfaces. |
| **Artifacts Builder** | [.agents/skills/artifacts-builder/](.agents/skills/artifacts-builder/SKILL.md) | Construção e renderização estruturada de artefatos visuais e documentos técnicos. |

---

## 13. Arquitetura de APIs RESTful e Servidores MCP (Model Context Protocol)

O Dexter Framework possui suporte nativo e padronizado para disponibilização de **APIs RESTful de alta velocidade** e **Servidores MCP (Model Context Protocol)** para integração direta com ferramentas e agentes de IA:

### 13.1. Estrutura de APIs RESTful
- **Controladores de API (`backend/Controllers/Api/` ou `modules/<modulo>/Controllers/Api/`):**
  - Respostas JSON estruturadas através do `ResponseEmitter` nativo do Core.
  - Validação estrita de entrada via DTOs tipados (`RequestValidation`).
  - Autenticação stateless via Bearer Token / JWT com rate limiting em Valkey/Redis.
  - Documentação automática OpenAPI / Swagger gerada via Attributes do PHP 8.4+.

### 13.2. Servidores e Ferramentas MCP (`/core/MCP` ou `/modules/<modulo>/MCP`)
- **Transportes Suportados:**
  - `stdio`: Para uso local por assistentes de linha de comando (Claude Code CLI, Cursor, Antigravity).
  - `SSE` (Server-Sent Events) ou HTTP Stateless: Para consumo remoto em contêineres Docker.
- **Regras Críticas de Desenvolvimento MCP:**
  - **Aviso Mandatório sobre Logging (Footgun):** É **estritamente proibido** utilizar `echo`, `print`, `var_dump` ou `console.log` soltos no transporte `stdio`. Qualquer saída arbitrária corrompe os envelopes JSON-RPC e quebra a conexão com o cliente. Toda telemetria MCP deve ser enviada via `STDERR` ou canais isolados de log do *Bay Harbor* (`/storage/logs/mcp.log`).
  - **Arquitetura Stateless:** Servidores MCP corporativos devem ser desenhados de forma stateless, persistindo contexto ou sessões em Valkey/Redis caso haja escalabilidade horizontal.
  - **Exposição de Tools e Resources:** Contratos declarativos em PHP com schemas validados antes da execução.

---

## 13. Convenções de Nomenclatura (Temática Dexter)
- **The Code:** O conjunto de regras de linting, PSR-12/PER e padrões sagrados de arquitetura.
- **Bay Harbor:** O módulo de armazenamento seguro e Datalake (`/storage`).
- **Dark Passenger:** O worker de filas, processamento assíncrono e tarefas em background.
- **Blood Spatter:** O subsistema de análise de erros, logs cirúrgicos e auditoria forense.
- **Kill Room:** O ambiente de sandbox/testes isolados (`/testes`) para execução controlada e migrações.

---

## 14. Próximos Passos (Debate antes da Codificação)
1. **Escopo Inicial:** Iniciar pelo core HTTP (Router, Request, Response) ou pelo `Database-Manager.php` com suporte a Firebird e multiconexão?
2. **Integração Svelte/HTMX:** Build via Vite integrado com PHP ou container isolado de compilação SASS/JS no Docker?
3. **Bridges:** Prioridade entre WordPress, Flow-PHP ou serviços administrativos?
4. **Naming:** Confirmar se as classes técnicas carregarão aliases temáticos (*DarkPassengerQueue*, *BayHarborStorage*) ou arquitetura formal com documentação temática.
