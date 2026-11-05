# Segurança Crítica & CVEs (PHP2Shell) - PHP Developer Expert 🛡️

Este guia documenta em profundidade as vulnerabilidades críticas **CVE-2026-109618** e **CVE-2026-109619** (conhecidas coletivamente como **PHP2Shell**), detalhando sua causa raiz no Zend Engine, como foram descobertas e os protocolos de prevenção e mitigação tanto para **PHP 8.2+** quanto para ambientes legados em **PHP 8.1 ou inferior** onde a atualização imediata de versão não é viável.

---

## 1. Visão Geral: O que são CVE-2026-109618 e CVE-2026-109619 ("PHP2Shell")?

**PHP2Shell** é o nome atribuído a um par de vulnerabilidades críticas de corrupção de memória na engine C do PHP que permitem **Execução Remota de Código (RCE) sem autenticação**.

- **Escopo de Versões Afetadas:** Todas as versões do PHP desde **5.4 até 8.5.11** (incluindo todas as árvores 5.x, 7.x, 8.0, 8.1, 8.2, 8.3, 8.4 e 8.5 antes dos patches de segurança).
- **Ambientes mais expostos:** Arquiteturas baseadas em processos workers persistentes que reutilizam memória entre múltiplas requisições HTTP, como **PHP-FPM**, **Apache `mod_php`**, **FrankenPHP** e **RoadRunner**.

---

## 2. Como Foi Ocasionado (Causa Raiz Técnica)

As duas vulnerabilidades exploram falhas na interação entre o gerenciamento de memória por requisição do Zend Engine, o tratamento de erros fatais de falta de memória (*Out-of-Memory* / OOM) e a limpeza de estado global entre requisições:

### 🔴 CVE-2026-109618 — Corrupção de Memória no Fluxo de OOM (`longjmp` / `zend_bailout`)
1. Quando o PHP atinge o limite de memória (`memory_limit`) ou falha ao alocar um bloco no heap durante o processamento de uma requisição, o Zend Engine aciona `zend_bailout()`, que utiliza a primitiva C `longjmp()` para saltar imediatamente para fora do contexto de execução atual e iniciar o desligamento da requisição (`RSHUTDOWN`).
2. Se a falha de alocação (OOM) ocorre exatamente no meio da inicialização de estruturas internas da requisição, a memória recém-alocada ou associada permanece **parcialmente inicializada** (contendo ponteiros nulos ou lixo de heap residual).
3. Durante a rotina subsequente de limpeza (`cleanup`), o PHP assume que essas estruturas foram totalmente inicializadas e tenta ler, percorrer ou liberar (`efree`) esses campos inválidos, resultando em **corrupção de heap** e desvio do fluxo de execução (RCE).

### 🔴 CVE-2026-109619 — Use-After-Free (UAF) e Estado Global Obsoleto (*Stale State*)
1. O PHP mantém estados internos atrelados à requisição — com destaque para o mecanismo nativo de rastreamento de progresso de upload de sessão (`session.upload_progress`) na fase de inicialização/parsing multipart (`RINIT` / SAPI).
2. Devido a uma falha no ciclo de vida e tratamento de erros, ponteiros globais do processo worker podem continuar referenciando estruturas de memória da requisição **mesmo após a memória subjacente ter sido liberada (`efree`)** no encerramento da requisição.
3. Em ambientes persistentes (como **PHP-FPM** ou `mod_php`), quando uma **nova requisição** é atribuída ao mesmo processo worker, o PHP interage com esses ponteiros globais obsoletos (*stale pointers*) antes que sejam reinicializados, desencadeando uma condição clássica de **Use-After-Free (UAF)** que permite a um atacante remoto forjar estruturas em memória e executar código arbitrário no servidor.

---

## 3. Como Foi Encontrado (Descoberta)

As vulnerabilidades **CVE-2026-109618** e **CVE-2026-109619** foram descobertas em **agosto de 2026** por meio de uma operação conjunta de pesquisa de segurança assistida por Inteligência Artificial:

- **Pesquisadores e Organizações:** Descobertas pelas equipes de pesquisa de segurança da **Calif** (incluindo o pesquisador Ryan Austin / *LCFR*) e da **Wiz**, em colaboração com a **OpenAI** dentro da iniciativa *"Patch the Planet"*.
- **Metodologia de Descoberta:** Os pesquisadores combinaram revisão humana especializada em binários/C com auditoria profunda de código assistida por LLMs de fronteira (**OpenAI GPT-5.6 Sol** e ferramentas baseadas em **Gemini 4 Argon / Wiz Atlas**).
- **Por que passou despercebido por mais de uma década:** Os bugs residiam no código C do core do PHP desde a versão **5.4** (mais de 12 anos). Como dependiam de estados transitórios entre o ciclo de vida SAPI (`RINIT`/`RSHUTDOWN`), falhas induzidas de alocação (`longjmp`) e reaproveitamento de workers persistentes, ferramentas tradicionais de *fuzzing* por requisição isolada e análises estáticas convencionais não detectavam a contaminação cruzada entre requisições consecutivas.

---

## 4. Como se Prevenir no PHP 8.2+ (Versões Ativas)

### Cenário A: Você PODE atualizar o PHP (Correção Definitiva Recomendada)
A única correção definitiva para os defeitos de memória no Zend Engine é atualizar os binários do PHP para as versões oficiais corrigidas pelo PHP Group:

| Ramificação (Branch) | Versões Vulneráveis | Versão Mínima Corrigida (Segura) |
|---|---|---|
| **PHP 8.2** | `8.2.0` até `8.2.34` | **`>= 8.2.35`** |
| **PHP 8.3** | `8.3.0` até `8.3.35` | **`>= 8.3.36`** |
| **PHP 8.4** | `8.4.0` até `8.4.26` | **`>= 8.4.27`** |
| **PHP 8.5** | `8.5.0` até `8.5.11` | **`>= 8.5.12`** |

### Cenário B: Você está no PHP 8.2+ mas NÃO pode atualizar os binários imediatamente
Se uma janela de manutenção imediata não for possível (ou como **defesa em profundidade** mesmo após atualizar), aplique imediatamente o bloqueio dos vetores de entrada:

#### 1. Desativar `session.upload_progress` Globalmente no `php.ini`
Neutraliza o vetor primário do **CVE-2026-109619** (ponteiros *stale* de upload de sessão) e protege contra variantes correlatas:

```ini
; /etc/php/8.x/fpm/php.ini ou /etc/php/8.x/fpm/conf.d/99-php2shell-mitigation.ini
; Disable session upload progress to neutralize CVE-2026-109619 / Desativa o progresso de upload na sessão para neutralizar o CVE-2026-109619
session.upload_progress.enabled = 0

; For PHP 8.5 (< 8.5.12), also disable fatal error backtraces / Para PHP 8.5 (< 8.5.12), desative também backtraces em erros fatais
fatal_error_backtraces = 0
```

> [!CAUTION]
> **REGRA DE OURO:** Configurar `session.upload_progress.enabled = 0` via `.htaccess`, `.user.ini` ou `ini_set()` no código PHP **NÃO PROTEGE O SERVIDOR**. O processamento do upload multipart e a alocação de estado ocorrem na fase inicial da SAPI (`RINIT`), **antes** que o script PHP ou arquivos `.user.ini` sejam avaliados. A diretiva **DEVE** estar no `php.ini` global ou fixada com `php_admin_flag` no pool do PHP-FPM, seguido de **restart completo do serviço** (`systemctl restart php8.x-fpm` / `apache2`).

#### 2. Travar a Diretiva no Pool do PHP-FPM (`www.conf`)
Impede que qualquer aplicação ou `.htaccess`/`.user.ini` reative o recurso:

```ini
; /etc/php/8.x/fpm/pool.d/www.conf
php_admin_flag[session.upload_progress.enabled] = off
```

---

## 5. Como se Prevenir no PHP 8.1 ou Menor (7.4, 8.0, 8.1) Sem Atualizar a Versão do PHP

Projetos em **PHP 8.1, 8.0, 7.4 ou anteriores** encontram-se em *End-of-Life* (EOL) no upstream oficial (`php.net`), mas muitas vezes não podem sofrer upgrade imediato para o PHP 8.2+ devido a incompatibilidades de código legado, bibliotecas depreciadas ou travas de homologação.

Siga este protocolo em camadas para blindar ambientes **PHP <= 8.1**:

### Camada 1: Verificar Backports de Segurança da Distribuição Linux (Mesma Versão do PHP)
Mesmo que o PHP 7.4, 8.0 ou 8.1 esteja EOL no `php.net`, mantenedores corporativos de distribuições Linux fornecem **patches de segurança retroportados (backports)** que corrigem `CVE-2026-109618` e `CVE-2026-109619` **sem alterar a versão do PHP** (mantendo 7.4 / 8.0 / 8.1 sem quebrar seu código):
- **Ubuntu (Ubuntu Pro / ESM) & Debian LTS:** Atualize via `sudo apt update && sudo apt --only-upgrade install php*`.
- **RHEL / AlmaLinux / Rocky Linux / Oracle Linux / Remi Repo:** Atualize via `sudo dnf update php*`.
- ** Repositórios Sury (`deb.sury.org` / PPA Ondřej Surý):** Verifique se há builds revisados da sua branch instalada.

### Camada 2: Hardening Obrigatório no `php.ini` e `php-fpm` (Caso o Binário Continue Vulnerável)
Se o binário do seu PHP <= 8.1 não possui backport disponível, aplique obrigatoriamente as configurações abaixo:

```ini
; =====================================================================
; MITIGAÇÃO PHP2SHELL (CVE-2026-109618 & CVE-2026-109619) - PHP <= 8.1
; Aplicar no php.ini GLOBAL (/etc/php/7.4/fpm/php.ini, /etc/php/8.1/...)
; =====================================================================

; 1. Corta o vetor de Use-After-Free na sessão de upload (CVE-2026-109619)
; Cuts the upload session Use-After-Free vector (CVE-2026-109619)
session.upload_progress.enabled = 0

; 2. Restringe limites de parsing multipart/input para dificultar indução de OOM (CVE-2026-109618)
; Restricts multipart/input parsing limits to prevent OOM induction (CVE-2026-109618)
max_input_vars = 1000
max_file_uploads = 20
; Garanta que post_max_size e upload_max_filesize sejam significativamente menores que memory_limit
; Ensure post_max_size and upload_max_filesize are significantly smaller than memory_limit
upload_max_filesize = 16M
post_max_size = 20M
memory_limit = 256M
```

No arquivo de pool do PHP-FPM (`/etc/php/8.1/fpm/pool.d/www.conf` ou equivalente no 7.4/8.0):

```ini
; Força a desativação de upload_progress sem permitir override por script
; Forces upload_progress deactivation without allowing script overrides
php_admin_flag[session.upload_progress.enabled] = off

; Recicla processos workers com frequência para reduzir a janela de contaminação de memória
; Recycles worker processes frequently to reduce the memory contamination window
pm.max_requests = 200
```

> [!WARNING]
> **Alerta Técnico sobre `memory_limit = -1`:**
> Alguns guias de emergência chegaram a sugerir `memory_limit = -1` para impedir que o PHP dispare o `longjmp()` de Out-Of-Memory do `CVE-2026-109618`. **NÃO utilize `memory_limit = -1` em servidores bare-metal ou VMs abertas**, pois qualquer payload grande esgotará 100% da RAM do host causando queda total do servidor (DoS). Essa abordagem só é aceitável em último caso se cada worker/container estiver estritamente isolado por **cgroups v2 / Docker (`--memory=256m --memory-swap=256m`)** ou `MemoryMax=` no `systemd`, delegando ao OOM Killer do Kernel Linux o encerramento completo do processo em vez do `longjmp()` interno do PHP.

### Camada 3: Bloqueio no Proxy Reverso (Nginx / Apache) e WAF
Em versões **PHP <= 8.1** sem patch no binário, você **deve** impedir que payloads maliciosos cheguem à SAPI do PHP usando o servidor web ou WAF (Cloudflare, AWS WAF, ModSecurity):

#### Exemplo de Blindagem no Nginx (`/etc/nginx/conf.d/` ou bloco `server`)
1. Limite o `client_max_body_size` no Nginx para um teto seguro (muito abaixo do `memory_limit` do PHP), evitando que requisições gigantes induzam OOM na fase de parsing do PHP.
2. Bloqueie requisições que enviem o identificador `PHP_SESSION_UPLOAD_PROGRESS`:

```nginx
# Limita o corpo da requisição na borda antes de tocar no PHP-FPM
# Limits request body at the edge before touching PHP-FPM
client_max_body_size 20M;

# Bloqueia tentativas de exploração via query string ou parâmetros de upload progress
# Blocks exploitation attempts via query string or upload progress parameters
if ($query_string ~* "PHP_SESSION_UPLOAD_PROGRESS") {
    return 403;
}
```

#### Exemplo de Regra ModSecurity (Apache / Nginx WAF)
```apache
# Bloqueia o campo multipart ou argumento PHP_SESSION_UPLOAD_PROGRESS (CVE-2026-109619)
# Blocks multipart field or argument PHP_SESSION_UPLOAD_PROGRESS (CVE-2026-109619)
SecRule ARGS_NAMES|FILES_NAMES "@rx (?i)PHP_SESSION_UPLOAD_PROGRESS" \
    "id:1009619,phase:2,deny,status:403,log,msg:'Bloqueio de tentativa de exploit PHP2Shell (CVE-2026-109619)'"
```

### Camada 4: Verificação Pós-Mitigação (Checklist de Auditoria)
Após aplicar as proteções em ambientes PHP 8.2+ ou PHP <= 8.1, valide imediatamente no terminal:

```bash
# 1. Reinicie o PHP-FPM / Apache para limpar ponteiros residuais e carregar o php.ini
sudo systemctl restart php*-fpm
# ou: sudo systemctl restart apache2 / httpd

# 2. Confirme que session.upload_progress.enabled está Desativado (Off / 0)
php -i | grep "session.upload_progress.enabled"
# Saída esperada: session.upload_progress.enabled => Off => Off
```

---

## 6. Servidores que Rodam Docker com PHP (Guia Completo de Blindagem) 🐳

Em ambientes containerizados (Docker, Docker Compose, Swarm, Kubernetes), as imagens oficiais `php:*` do Docker Hub possuem particularidades críticas de estrutura de diretórios (`/usr/local/etc/php/conf.d/`) e ciclo de vida (imagens `php:8.1` ou inferiores estão congeladas no Docker Hub e não recebem novos builds oficiais).

Abaixo estão os **4 procedimentos operacionais** para blindar ambientes Docker contra o **PHP2Shell (`CVE-2026-109618` e `CVE-2026-109619`)**:

### 6.1. Cenário A: Atualização de Imagens Docker em PHP 8.2+
Se o projeto utiliza PHP 8.2 ou superior, fixe a tag da imagem base para a versão mínima corrigida e force o rebuild puxando a imagem nova sem cache:

- **PHP 8.2:** `php:8.2.35-fpm-alpine` (ou `-bookworm` / `-apache`)
- **PHP 8.3:** `php:8.3.36-fpm-alpine`
- **PHP 8.4:** `php:8.4.27-fpm-alpine`
- **PHP 8.5:** `php:8.5.12-fpm-alpine`

```bash
# Forçar download da imagem atualizada e recriar os containers
# Force download of updated image and recreate containers
docker compose build --pull --no-cache
docker compose up -d
```

### 6.2. Cenário B: Mitigação via `docker-compose.yml` (Sem Precisar Rebuildar a Imagem)
Ideal para **PHP 8.1 ou menor** (`php:7.4-fpm`, `php:8.0-fpm`, `php:8.1-fpm`, `php:*-apache`) ou **PHP 8.2+ quando você não pode alterar/rebuildar a imagem imediatamente**.

Nas imagens oficiais do PHP no Docker, qualquer arquivo `.ini` montado em `/usr/local/etc/php/conf.d/` e qualquer `.conf` em `/usr/local/etc/php-fpm.d/` são carregados automaticamente na inicialização:

#### Passo 1: Crie os arquivos locais de blindagem no host
Crie `./docker/php/99-php2shell-mitigation.ini`:
```ini
; Disable session upload progress globally (CVE-2026-109619)
; Desativa progresso de upload na sessão globalmente (CVE-2026-109619)
session.upload_progress.enabled = 0

; For PHP 8.5 (< 8.5.12), disable fatal error backtraces
; Para PHP 8.5 (< 8.5.12), desativa backtraces em erros fatais
fatal_error_backtraces = 0

; Tight input/multipart limits to prevent OOM longjmp (CVE-2026-109618)
; Limites estritos de input/multipart para prevenir OOM longjmp (CVE-2026-109618)
max_input_vars = 1000
max_file_uploads = 20
upload_max_filesize = 16M
post_max_size = 20M
memory_limit = 256M
```

Crie `./docker/php/zz-php2shell-pool.conf` (para imagens `fpm`):
```ini
[www]
; Lock upload_progress off so neither scripts nor .user.ini can re-enable it
; Trava upload_progress desligado impedindo reativação por script ou .user.ini
php_admin_flag[session.upload_progress.enabled] = off

; Recycle FPM workers regularly to flush residual memory state
; Recicla workers FPM regularmente para limpar estados residuais de memória
pm.max_requests = 200
```

#### Passo 2: Monte os arquivos e isole a memória no `docker-compose.yml`
```yaml
services:
  php:
    image: php:8.1-fpm-alpine # Funciona em 7.4, 8.0, 8.1, 8.2+
    volumes:
      - ./:/var/www/html
      # Injeta a blindagem como somente-leitura (:ro) sem rebuild
      # Injects mitigation as read-only (:ro) without rebuild
      - ./docker/php/99-php2shell-mitigation.ini:/usr/local/etc/php/conf.d/99-php2shell-mitigation.ini:ro
      - ./docker/php/zz-php2shell-pool.conf:/usr/local/etc/php-fpm.d/zz-php2shell-pool.conf:ro
    # Alternativa extra via linha de comando do entrypoint:
    # command: ["php-fpm", "-d", "session.upload_progress.enabled=0"]
    deploy:
      resources:
        limits:
          # Confinamento de memória via cgroup do Docker (protege o host contra OOM)
          # Memory confinement via Docker cgroup (protects host against OOM)
          memory: 512M
```

> [!TIP]
> **Por que o cgroup do Docker ajuda no `CVE-2026-109618`?**
> Em containers Docker com limite rígido de memória (`memory: 512M` / `--memory=512m --memory-swap=512m`), você protege o servidor host contra exaustão de RAM e garante que qualquer processo anômalo seja contido pelo namespace do container.

### 6.3. Cenário C: Blindagem Definitiva Dentro do `Dockerfile` (Para Imagens Customizadas e PHP <= 8.1)
Se você mantém um `Dockerfile` próprio (especialmente em **PHP 7.4, 8.0 ou 8.1**, cujas tags oficiais do Docker Hub não receberão mais updates do `php.net`), embuta a proteção diretamente na imagem para que nenhum deploy suba desprotegido:

```dockerfile
FROM php:8.1-fpm-alpine

# 1. Cria o arquivo de blindagem contra CVE-2026-109618 e CVE-2026-109619
# 1. Creates mitigation file against CVE-2026-109618 and CVE-2026-109619
RUN printf "session.upload_progress.enabled = 0\n\
fatal_error_backtraces = 0\n\
max_input_vars = 1000\n\
max_file_uploads = 20\n\
upload_max_filesize = 16M\n\
post_max_size = 20M\n\
memory_limit = 256M\n" > /usr/local/etc/php/conf.d/99-php2shell-mitigation.ini \
    && printf "[www]\n\
php_admin_flag[session.upload_progress.enabled] = off\n\
pm.max_requests = 200\n" > /usr/local/etc/php-fpm.d/zz-php2shell-pool.conf
```

> [!NOTE]
> **Precisa de binário PHP `<= 8.1` com patch no código C dentro do Docker?**
> As imagens oficiais `php:7.4` / `php:8.1` compilam o PHP a partir do tarball upstream (`php.net`), que está EOL. Caso sua política de compliance exija o binário C corrigido sem mudar a versão do PHP (ex: manter PHP 8.1 ou 7.4), construa sua imagem a partir de `debian:bookworm-slim` ou `ubuntu:22.04` utilizando pacotes de repositórios mantidos com backports de segurança ativos (como **Sury** `packages.sury.org/php/`, **Ubuntu Pro/ESM** ou **Remi Repo** no AlmaLinux/Rocky Linux), que aplicam o backport do patch de `CVE-2026-109618` e `CVE-2026-109619` diretamente nos pacotes `php8.1-fpm` / `php7.4-fpm`.

### 6.4. Cenário D: Hotfix de Emergência em Container Rodando em Produção (Zero-Downtime / Sem Recreate)
Se você tem containers críticos em produção que **não podem ser recriados agora**, você pode injetar o bloqueio em tempo real e recarregar os workers do `php-fpm` (sinal `USR2` no PID 1) ou `apache2` (sinal `USR1`) sem derrubar o container:

```bash
# 1. Injeta a configuração diretamente no container em execução
# 1. Injects configuration directly into the running container
docker exec -u 0 <nome_do_container> sh -c \
  'printf "session.upload_progress.enabled = 0\nfatal_error_backtraces = 0\n" > /usr/local/etc/php/conf.d/99-php2shell-mitigation.ini'

# 2A. Se o container roda PHP-FPM: envia sinal USR2 para o PID 1 (reload gracioso de workers e php.ini)
# 2A. If container runs PHP-FPM: sends USR2 signal to PID 1 (graceful reload of workers and php.ini)
docker kill --signal=USR2 <nome_do_container>

# 2B. Se o container roda Apache (php:*-apache): envia sinal USR1 (apachectl graceful)
# 2B. If container runs Apache (php:*-apache): sends USR1 signal (apachectl graceful)
docker kill --signal=USR1 <nome_do_container>

# 3. Audita imediatamente se a proteção está ativa dentro do container
# 3. Immediately audits if protection is active inside the container
docker exec <nome_do_container> php -i | grep "session.upload_progress.enabled"
# Saída esperada: session.upload_progress.enabled => Off => Off
```

> [!WARNING]
> **Atenção à Efemeridade do Container:** O hotfix via `docker exec` (Cenário D) protege o container imediatamente, mas será perdido se o container for recriado (`docker compose up -d --force-recreate`). Sempre persista a configuração no `docker-compose.yml` (Cenário B) ou `Dockerfile` (Cenário C) logo em seguida.

