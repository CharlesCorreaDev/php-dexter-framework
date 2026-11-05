# Changelog - PHP Dev Expert 🐘

All notable changes to the `php-dev-expert` skill will be documented in this file.  
*Todas as alterações notáveis na skill `php-dev-expert` serão documentadas neste arquivo.*

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/), and adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

---

## [0.6.0-beta] - 2026-10-28

### Added / Adicionado
- **Documentação de Programação Orientada a Objetos em PHP em [`OOP/`](OOP/README.md):** índice com mapa das 30 aulas da playlist, pilares e vantagens da POO, mais 4 módulos: [fundamentos](OOP/01-fundamentos-classes-objetos-visibilidade-metodos-especiais.md) (`Caneta`, `ContaBanco`), [encapsulamento, interfaces e agregação](OOP/02-encapsulamento-interfaces-relacionamentos-agregacao.md) (`ControleRemoto`, `Lutador`, `Luta`, `Livro`), [herança e polimorfismo](OOP/03-heranca-polimorfismo-sobreposicao-sobrecarga.md) (`Pessoa`, `Animal`, `Cachorro`) e [projeto final e POO moderna PHP 8.x](OOP/04-projeto-final-completo-e-poo-moderna-php8.md) (`Video`, `Gafanhoto`, `Visualizacao`, Enums, `readonly`, Property Hooks, `#[Override]`).
- **Acervo Completo de Documentações Oficiais de CMS, LMS, E-Commerce, Faturamento, Helpdesk, Redes Sociais, Analytics e Ferramentas em PHP em [`cms/`](cms/README.md) (`2.501 páginas` em 31 plataformas):**
  - **CMS, E-Commerce & Eventos:** [`wordpress`](cms/wordpress/_INDEX.md) (452 págs), [`joomla`](cms/joomla/_INDEX.md) (322 págs), [`craftcms`](cms/craftcms/_INDEX.md) (249 págs), [`octobercms`](cms/octobercms/_INDEX.md) (155 págs), [`opencart`](cms/opencart/_INDEX.md) (90 págs), [`oscommerce`](cms/oscommerce/_INDEX.md) (50 págs), [`eventschedule`](cms/eventschedule/_INDEX.md) (41 págs), [`maianmedia`](cms/maianmedia/_INDEX.md) (40 págs) e [`subrion`](cms/subrion/_INDEX.md) (24 págs).
  - **LMS (Educação):** [`moodle`](cms/moodle/_INDEX.md) (60 págs) e [`formalms`](cms/formalms/_INDEX.md) (60 págs).
  - **Faturamento, Billing, CRM & Membership:** [`blesta`](cms/blesta/_INDEX.md) (100 págs), [`invoiceninja`](cms/invoiceninja/_INDEX.md) (62 págs), [`invoiceplane`](cms/invoiceplane/_INDEX.md) (61 págs), [`zenbership`](cms/zenbership/_INDEX.md) (61 págs) e [`x2crm`](cms/x2crm/_INDEX.md) (4 págs).
  - **Helpdesk, Live Chat & Webmail:** [`livehelperchat`](cms/livehelperchat/_INDEX.md) (61 págs), [`freescout`](cms/freescout/_INDEX.md) (49 págs), [`roundcube`](cms/roundcube/_INDEX.md) (39 págs), [`afterlogic`](cms/afterlogic/_INDEX.md) (13 págs) e [`mibew`](cms/mibew/_INDEX.md) (10 págs).
  - **Redes Sociais & Comunidades:** [`ossn`](cms/ossn/_INDEX.md) (66 págs), [`elgg`](cms/elgg/_INDEX.md) (60 págs), [`humhub`](cms/humhub/_INDEX.md) (54 págs) e [`jcow`](cms/jcow/_INDEX.md) (15 págs).
  - **Analytics, DB Admin, Segurança & Legado:** [`matomo`](cms/matomo/_INDEX.md) (96 págs), [`mywebsql`](cms/mywebsql/_INDEX.md) (51 págs), [`htmlpurifier`](cms/htmlpurifier/_INDEX.md) (50 págs), [`openwebanalytics`](cms/openwebanalytics/_INDEX.md) (50 págs), [`phpmyadmin`](cms/phpmyadmin/_INDEX.md) (48 págs) e [`kohana`](cms/kohana/_INDEX.md) (8 págs).

---

## [0.5.0-beta] - 2026-10-28

### Added / Adicionado
- **Documentação Conceitual e Histórica de Frameworks PHP em [`frameworks/doc/`](frameworks/doc/README.md):**
  - **[`frameworks/doc/README.md`](frameworks/doc/README.md):** O que é um Framework, diferença entre Biblioteca e Framework (Inversão de Controle / Princípio de Hollywood), resumo do surgimento e os 7 pilares técnicos (padronização, segurança OWASP nativa, roteamento/middlewares, DI Container PSR-11, ORM/Migrations, filas/cache/CLI e testabilidade).
  - **[`frameworks/doc/01-historia-e-evolucao-dos-frameworks-php.md`](frameworks/doc/01-historia-e-evolucao-dos-frameworks-php.md):** Linha do tempo histórica e técnica de 1995 a 2026 (Era Pré-Frameworks PHP 3/4, 1ª Geração MVC no PHP 5.0 inspirada em Rails, Revolução do PHP 5.3 + Composer + PHP-FIG, Era da Performance no PHP 7.x e Era Cloud-Native/Tipagem Estrita/Runtimes Persistentes no PHP 8.0–8.5).
  - **[`frameworks/doc/02-arquitetura-comparativo-e-quando-usar.md`](frameworks/doc/02-arquitetura-comparativo-e-quando-usar.md):** Comparativo Full-Stack vs Micro-Frameworks, arquitetura HMVC e matriz de decisão para escolha do framework ideal.
- **Acervo Completo de Documentações Oficiais de Frameworks PHP em [`frameworks/`](frameworks/):**
  - **Laravel** ([`frameworks/laravel/_INDEX.md`](frameworks/laravel/_INDEX.md) — 104 páginas).
  - **Symfony** ([`frameworks/symfony/_INDEX.md`](frameworks/symfony/_INDEX.md) — 100 páginas).
  - **Yii Framework (Guide 22.0, Yii3 Guide, Wiki, API 3.0 & API 22.0)** ([`frameworks/yii/_INDEX.md`](frameworks/yii/_INDEX.md) — 230 páginas).
  - **Spiral Framework** ([`frameworks/spiral/SKILL.md`](frameworks/spiral/SKILL.md) e [`frameworks/spiral/_INDEX.md`](frameworks/spiral/_INDEX.md) — 140 páginas estruturadas via `website-for-skill` e `website-for-markdown`).
  - **CodeIgniter 4** ([`frameworks/codeigniter/_INDEX.md`](frameworks/codeigniter/_INDEX.md)).
  - **FuelPHP (`docs` + `api`)** ([`frameworks/fuelphp/_INDEX.md`](frameworks/fuelphp/_INDEX.md)).
  - **Slim Framework v4** ([`frameworks/slim/_INDEX.md`](frameworks/slim/_INDEX.md)).
  - **FlightPHP v3 (`pt`)** ([`frameworks/flightphp/_INDEX.md`](frameworks/flightphp/_INDEX.md)).
  - **Fat-Free Framework (F3 v3.9 — `user-guide`, `api-reference` & `development`)** ([`frameworks/fatfree/_INDEX.md`](frameworks/fatfree/_INDEX.md) — 49 páginas).
  - **Web-Framework** ([`frameworks/web-framework/_INDEX.md`](frameworks/web-framework/_INDEX.md)).
- **Acervo Completo de Documentações Oficiais de Servidores Web em [`servers/`](servers/):**
  - **Caddy Web Server** ([`servers/caddy-web-server/_INDEX.md`](servers/caddy-web-server/_INDEX.md) — 123 páginas).
  - **Apache HTTP Server 2.4 (`pt-br`)** ([`servers/apache-server/2.4/_INDEX.md`](servers/apache-server/2.4/_INDEX.md) — 255 páginas).
  - **Apache HTTP Server 2.2 (`pt-br`)** ([`servers/apache-server/2.2/_INDEX.md`](servers/apache-server/2.2/_INDEX.md) — 187 páginas).
  - **LiteSpeed Web Server (`LSWS`, `LSCache`, `LSADC`, Open-Source & GitHub)** ([`servers/lightspeed-server/_INDEX.md`](servers/lightspeed-server/_INDEX.md)).
  - **Nginx** ([`servers/nginx-server/_INDEX.md`](servers/nginx-server/_INDEX.md) — 152 páginas).
  - **Microsoft IIS (`pt-br`)** ([`servers/iis-server/_INDEX.md`](servers/iis-server/_INDEX.md) — 150 páginas).
- **Acervo Completo de Documentações Oficiais do Bootstrap por Versão em [`bootstrap/`](bootstrap/README.md):**
  - **Bootstrap 3.4** ([`bootstrap/3.4/_INDEX.md`](bootstrap/3.4/_INDEX.md) — 27 páginas).
  - **Bootstrap 4.6** ([`bootstrap/4.6/_INDEX.md`](bootstrap/4.6/_INDEX.md) — 106 páginas).
  - **Bootstrap 5.3** ([`bootstrap/5.3/_INDEX.md`](bootstrap/5.3/_INDEX.md) — 162 páginas).
  - **Bootstrap 6.0** ([`bootstrap/6.0/_INDEX.md`](bootstrap/6.0/_INDEX.md) — 182 páginas).

---

## [0.4.0-beta] - 2026-10-28

### Added / Adicionado
- **Documentação Modular Completa de Arquitetura PHP MVC em [`MVC/`](MVC/README.md):**
  - **[`MVC/README.md`](MVC/README.md):** Visão geral do Web MVC em PHP, tabela de responsabilidades estritas (`M`, `V`, `C`), diagrama de sequência completo do ciclo de vida HTTP, árvore de diretórios canônica (`public/`, `app/`, `resources/views/`, `config/`, `tests/`) e mapeamento das PSRs da PHP-FIG (PSR-4, PSR-7, PSR-11, PSR-12, PSR-14, PSR-15).
  - **[`MVC/01-front-controller-routing-psr.md`](MVC/01-front-controller-routing-psr.md):** Implementação do Front Controller (`public/index.php`), configuração segura de Nginx (`try_files`) e Apache (`.htaccess`), autoloading PSR-4 via Composer, Container de Injeção de Dependências com Auto-Wiring via `ReflectionClass`, Router com grupos regex nomeados, pipeline Onion de Middlewares e suporte a Attributes `#[Route]` (PHP 8.0+).
  - **[`MVC/02-controllers-requests-validation.md`](MVC/02-controllers-requests-validation.md):** Princípio *Skinny Controller*, encapsulamento de `Request` e `Response` sem acoplamento a superglobais, Data Transfer Objects (`readonly class` no PHP 8.2+ e equivalente para PHP 7.4), tratamento de exceções de domínio e *Single-Action Controllers* (`__invoke` / ADR).
  - **[`MVC/03-models-services-repositories-pdo.md`](MVC/03-models-services-repositories-pdo.md):** Separação da camada Model em Entidades Ricas (`Entities`), Estados Tipados (`BackedEnum` no PHP 8.1+ / constantes no PHP 7.4), Contratos de Persistência (`UserRepositoryInterface`), implementação `PdoUserRepository` com Prepared Statements estritos contra SQL Injection, e `UserService` com `password_hash` (`PASSWORD_ARGON2ID`) e controle transacional (`beginTransaction`/`commit`/`rollBack`).
  - **[`MVC/04-views-templates-security-xss-csrf.md`](MVC/04-views-templates-security-xss-csrf.md):** Motor `ViewRenderer` nativo com suporte a Layouts e Partials, proteção contextual contra XSS (`htmlspecialchars`), `CsrfMiddleware` com `random_bytes(32)` e `hash_equals()`, serialização segura para APIs REST (`JsonSerializable`) e comparativo entre **Twig**, **Blade** e **Latte**.
  - **[`MVC/05-evolution-php74-to-php85-and-frameworks.md`](MVC/05-evolution-php74-to-php85-and-frameworks.md):** Evolução prática do MVC entre o **PHP 7.4 e o PHP 8.5** (incluindo *Property Hooks* e *Asymmetric Visibility* `public private(set)` no PHP 8.4 e *Pipe Operator* `|>` no PHP 8.5), tabela comparativa com **Laravel**, **Symfony**, **FlightPHP** e **Slim**, refatoração de *Anti-Patterns* (*God Controller*, *SQL na View*, *Anemic Domain Model*) e testes unitários ultrarrápidos com `InMemoryUserRepository` no PHPUnit.

---

## [0.3.0-beta] - 2026-10-28

### Added / Adicionado
- **Guia Completo sobre PHP2Shell (`CVE-2026-109618` e `CVE-2026-109619`) em [`security-cves.md`](security-cves.md):**
  - Documentação técnica detalhada da causa raiz no Zend Engine: corrupção de memória por estruturas parcialmente inicializadas durante `longjmp()` (`zend_bailout`) em erros Out-Of-Memory (`CVE-2026-109618`) e *Use-After-Free* (UAF) por estado global obsoleto (*stale pointers*, notavelmente `session.upload_progress`) em workers persistentes como PHP-FPM e `mod_php` (`CVE-2026-109619`).
  - Histórico de descoberta (agosto de 2026) pelas equipes de segurança da Calif e Wiz em parceria com a OpenAI (*"Patch the Planet"*), utilizando auditoria assistida por IA (GPT-5.6 Sol e Gemini 4 Argon / Wiz Atlas).
  - Protocolos de prevenção para **PHP 8.2+** (atualização para `>= 8.2.35`, `>= 8.3.36`, `>= 8.4.27`, `>= 8.5.12` e mitigação sem atualização imediata).
  - Protocolos de blindagem em camadas para **PHP 8.1 ou inferior** (7.4, 8.0, 8.1) quando não é possível atualizar a versão do PHP: verificação de backports LTS de distros, travamento de `session.upload_progress.enabled = 0` no `php.ini` global e `php_admin_flag` no PHP-FPM, controle de limites de memória/input, reciclagem de workers (`pm.max_requests`) e regras de bloqueio no Nginx e ModSecurity/WAF.
  - **Guia Completo para Ambientes Docker com PHP:** Atualização de tags oficiais (`8.2.35+`, `8.3.36+`, `8.4.27+`, `8.5.12+`), mitigação sem rebuild via *bind mounts* (`:ro`) no `docker-compose.yml` (`/usr/local/etc/php/conf.d/` e `/usr/local/etc/php-fpm.d/`) com isolamento de memória por cgroup, hardening nativo no `Dockerfile` para imagens legadas (`php:8.1` ou menor), uso de distros com backport (Sury/ESM/Remi) e hotfix de emergência zero-downtime em containers em execução via `docker exec` + `docker kill --signal=USR2`/`USR1`.
- **Manual Oficial Completo do PHP (`pt_BR`) em [`php-docs/`](php-docs/_INDEX.md):**
  - Ingestão integral das **11.838 páginas** de `https://www.php.net/manual/pt_BR/` convertidas para Markdown limpo com todos os links internos reescritos (`.md`), índice mestre categorizado ([`php-docs/_INDEX.md`](php-docs/_INDEX.md)), sumário original ([`php-docs/index.md`](php-docs/index.md)) e manifesto JSON ([`php-docs/crawl_manifest.json`](php-docs/crawl_manifest.json)).
- Atualizados [`SKILL.md`](SKILL.md), [`cheatsheet.md`](cheatsheet.md) e [`glossary.md`](glossary.md) com referências rápidas para o PHP2Shell.

---

## [0.2.0-beta] - 2026-10-25

### Added / Adicionado
- **Protocolo de Feedback Proativo e Abertura Autônoma de Issues no GitHub:** Geração de documentação técnica bilíngue (EN/PT) e abertura autônoma de issues via `gh issue create` perante bugs, ferramentas ausentes ou limitações no MCP.
- **Protocolo Obrigatório de Verificação e Revisão:** Validação sintática, execução de testes funcionais e integridade de caminhos antes de qualquer entrega.
- **Diretriz de Comentários Bilíngues de Código:** Comentários estritamente necessários devem ser escritos em Inglês e Português.

---

## [0.1.0-beta] - 2026-10-23

### Added / Adicionado
- **Lançamento Inicial da Skill (Beta):**
  - Diretrizes para PHP 7.4 até 8.5, detecção proativa de versão do host e padrões modernos (MVC, ADR, PSRs).
  - Arquivo `VERSION` para governança de versão e detecção por agentes.
