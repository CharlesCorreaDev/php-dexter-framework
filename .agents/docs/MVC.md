# 🏛️ MVC: Padrão Arquitetural do Dexter Framework (Beta)

Este documento estabelece as diretrizes formais do padrão **Model-View-Controller (MVC)** implementado no **Dexter Framework**, garantindo separação rígida de responsabilidades, testabilidade e aderência estrita ao princípio DRY.

---

## 1. Visão Geral do Fluxo de Execução

```
[Requisição HTTP]
        │
        ▼
[Web Server / .htaccess / Security Headers]
        │
        ▼
[GuardaIP & Pipeline de Middlewares] (Rate Limit Valkey/Redis, Sanitização, CSRF)
        │
        ▼
[Router (Core)] ── Identifica e Despacha ──► [Controller (Backend/App/Modules)]
                                                    │
                                   ┌────────────────┴────────────────┐
                                   ▼                                 ▼
                          [Services / Regras]              [DTOs / InputValidation]
                                   │
                                   ▼
                         [Repositories (PDO)] ◄── Fluent Query Builder (Sem SQL puro)
                                   │
                                   ▼
                         [Database-Manager.php] (PG, MySQL, Firebird, etc.)
                                   │
                                   ▼
[Controller] ──────── Formata a Saída ────────► [Response Emitter]
        │                                                ▲
        ├──────► [View: Renderização Twig 3.x] ──────────┤
        └──────► [API: JSON / XML Estruturado] ──────────┘
```

---

## 2. Camadas do MVC

### 2.1. Modelos, Entidades e Repositórios (`/backend/Models`, `/backend/Repositories`)
- **Entidades (`Entities`):** Classes simples que representam dados do domínio. Não contêm regras de negócio complexas ou consultas a banco.
- **Repositórios (`Repositories`):** Responsáveis exclusivos pelo acesso a dados.
  - **Regra de Ouro:** É **proibido o uso de SQL puro**. Toda interação deve utilizar o Fluent Query Builder do Dexter Framework.
  - O acesso multiconexão é provido pela classe `Database-Manager.php`, suportando PostgreSQL, MySQL, SQLite, SQL Server, Firebird e MongoDB.
- **Serviços (`Services`):** Orquestram lógica de negócio, chamadas a APIs externas, integrações ETL (Flow-PHP), validações complexas e despacho de filas (*Dark Passenger*).

### 2.2. Controladores (`/backend/Controllers`)
- Devem ser magros (*Skinny Controllers*).
- Responsabilidades:
  1. Receber e tipar a `Request`.
  2. Delegar a validação de dados para formulários/DTOs dedicados.
  3. Acionar os `Services` apropriados.
  4. Retornar um objeto `Response` (View HTML Twig, resposta JSON ou redirecionamento).
- Nunca execute queries diretamente no Controller.

### 2.3. Visualização (`/frontend/views`)
- **Motor de Templates:** **Twig 3.x**.
- **Segurança:** O Twig executa escape automático de caracteres para mitigar vulnerabilidades XSS.
- **Herança de Templates:**
  - Layout mestre do painel Mantis: `frontend/views/layouts/mantis.twig`.
  - Layouts de e-mail transacional (baseado em [leemunroe](https://github.com/leemunroe/responsive-html-email-template)): `frontend/views/emails/`.
- **Reatividade Híbrida:**
  - **HTMX:** Interações parciais do servidor (substituição de blocos HTML sem recarregamento de página).
  - **Svelte:** Componentes de estado reativo complexo no cliente.

---

## 3. Extensões via Módulos (`/modules`)
- Módulos independentes podem conter sua própria tríade MVC:
  - `modules/<nome>/Controllers/`
  - `modules/<nome>/Services/`
  - `modules/<nome>/Views/` (templates Twig dedicados)
- O `ModuleServiceProvider` conecta as rotas do módulo ao Router principal sem tocar no core.

---

## 4. Checklist para Novas Funcionalidades MVC
- [ ] O Controller apenas orquestra dados e chama Services?
- [ ] A regra de negócio está encapsulada em um Service testável?
- [ ] O Repository utiliza Fluent Query Builder (sem SQL puro)?
- [ ] As variáveis injetadas na View Twig estão protegidas contra XSS?
- [ ] O código foi previamente testado na suíte `/testes`?
