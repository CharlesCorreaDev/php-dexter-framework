# 🛡️ Dexter Security Protocol (DSP) - "The Code" (Beta)

Este documento estabelece a política e a arquitetura de **Segurança em Profundidade (Defense in Depth)** do **Dexter Framework**. 

> **Princípio Fundamental:** Segurança não é adicionada cinco minutos antes do deploy; ela é planejada, codificada e testada desde a raiz do framework, baseada na cartilha [Paragon Initiative Enterprises (Building Secure PHP Software)](https://paragonie.com/blog/2017/12/2018-guide-building-secure-php-software).

---

## 1. Fluxo de Defesa Perimetral & Verificação de IP

A proteção contra atacantes ocorre **antes** de qualquer processamento custoso de CPU ou banco de dados:

1. **Camada Web Server / `.htaccess`:**
   - Bloqueio de faixas de IP conhecidas da blacklist do `myip.ms`.
   - Bloqueio de métodos HTTP não autorizados e varredura de requisições anômalas.
2. **Middleware GuardaIP:**
   - Consulta tabela/cache rápido (Valkey/Redis) de `ips_bloqueados`.
   - Consulta à API **Stop Forum Spam** em operações críticas (novos cadastros, recuperação de conta).
   - Registro de auditoria em `/storage/logs` com informações forenses (IP, User-Agent, rota tentada).

---

## 2. Pipeline de Segurança e Proteções Críticas

### 2.1. Mitigação de Vulnerabilidades Web
- **SQL Injection (SQLi):**
  - Proibição de concatenação de strings em SQL.
  - Uso mandatório do Fluent Query Builder e Prepared Statements com PDO no `Database-Manager.php`.
- **Cross-Site Scripting (XSS):**
  - Escape automático habilitado no motor Twig.
  - Sanitização rigorosa de entradas com políticas de HTML restritas.
- **Cross-Site Request Forgery (CSRF):**
  - Geração de tokens CSRF criptograficamente seguros em todos os formulários e requisições mutativas (POST, PUT, DELETE).
- **Proteção contra CVEs de Runtime (incluindo PHP2Shell / CVE-2026-109618 e CVE-2026-109619):**
  - Isolamento de diretórios temporários de upload (`/storage/uploads/temp`).
  - Desativação de funções perigosas e sanitização obrigatória de nomes de arquivos e variáveis de ambiente.

### 2.2. Anti-DDoS e Prevenção de Força Bruta
- Rate Limiting distribuído suportado por **Valkey** ou **Redis** (ex: limite de 5 requisições por segundo em rotas de login/autenticação).
- *Backoff* exponencial (atraso progressivo na resposta) após falhas consecutivas de autenticação.

### 2.3. Honeypots e Defesa Ativa
- **Campos Invisíveis (Honeypot):** Formulários contêm campos ocultos (ex: `x_verificacao_seguranca_email`). Qualquer preenchimento por robôs resulta em bloqueio imediato do IP.
- **Link Blackhole:** Inclusão de hyperlinks invisíveis a usuários humanos no HTML. Bots e scrapers que seguem o link são banidos automaticamente.
- **Cookie de Rastreio Comportamental:** Monitoramento de padrões anômalos de navegação.

---

## 3. Cabeçalhos de Segurança Mandatórios (Security Headers)

Implementados em todas as respostas HTTP via middleware central ou `.htaccess`:

```http
X-Frame-Options: DENY
X-XSS-Protection: 1; mode=block
X-Content-Type-Options: nosniff
Referrer-Policy: no-referrer-when-downgrade
Strict-Transport-Security: max-age=31536000; includeSubDomains; preload
Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src 'self' data:; font-src 'self';
```

---

## 4. Auditoria Contínua e Ferramentas SAST

O código-fonte do Dexter Framework é auditado continuamente através da suíte:
- **Análise Estática de Vulnerabilidades:** Progpilot e `phpcs-security-audit`.
- **Auditoria de Dependências Composer:** SensioLabs Security-Checker, Roave SecurityAdvisories e FriendsOfPHP Security Advisories.
- **Integridade:** PHP Malware Detector e varredura Snyk.
- **Inspeção Estática Geral:** PHPStan (nível 8+) e SonarSource Sonar-PHP.
