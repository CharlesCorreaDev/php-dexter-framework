# Cheatsheet / Guia Rápido - PHP Developer Expert

## 🐘 Evolução e Diferenças Rápidas (7.4 vs 8.x)

| Recurso | PHP 7.4 | PHP 8.x |
|---|---|---|
| **Propriedades Tipadas** | `public string $nome;` (Apenas tipos simples) | `public string\|int $id;` (Union Types - 8.0) |
| **Construtor** | Atribuição manual nas propriedades | Constructor Property Promotion (8.0) |
| **Match vs Switch** | `switch ($v) { case 1: ... break; }` | `$r = match($v) { 1 => 'a', default => 'b' };` (8.0) |
| **Nullsafe Operator** | `$v = $obj ? $obj->metodo() : null;` | `$v = $obj?->metodo();` (8.0) |
| **Named Arguments** | Não suportado | `funcao(arg2: 'valor', arg1: 1);` (8.0) |
| **Enums** | Não suportado (uso de constantes) | `enum Status { case Ativo; }` (8.1) |
| **Readonly Properties**| Não suportado | `public readonly string $prop;` (8.1) |
| **Readonly Classes** | Não suportado | `readonly class DTO { ... }` (8.2) |
| **Tipos DNF** | Não suportado | `(A&B)\|C` (8.2) |
| **Tipagem `true`, `false`, `null`** | Não suportado como tipo isolado | Suportado nativamente (8.2) |

## 🛠️ Comandos CLI Úteis

```bash
# Iniciar servidor embutido
php -S localhost:8000 -t public/

# Verificar versão
php -v

# Verificar módulos instalados
php -m

# Avaliar código rápido
php -r "echo 'Hello World';"

# Linter (Verificar erros de sintaxe sem rodar)
php -l arquivo.php
```

## 🔒 Segurança Básica (Checklist)
1. **Sempre** use declarações preparadas (Prepared Statements) do PDO para SQL.
2. **Sempre** use `htmlspecialchars()` ou equivalente do framework ao exibir dados (XSS).
3. **Sempre** use `password_hash()` e `password_verify()`. Nunca MD5 ou SHA1.
4. **Sempre** valide o CSRF token em mutações de estado (POST/PUT/DELETE).
5. **Mitigação PHP2Shell (`CVE-2026-109618` & `CVE-2026-109619`)**:
   - **PHP 8.2+**: Atualizar para `>= 8.2.35`, `>= 8.3.36`, `>= 8.4.27` ou `>= 8.5.12`.
   - **Sem poder atualizar (PHP 8.2+ ou PHP <= 8.1)**: Desativar `session.upload_progress.enabled = 0` no `php.ini` **global** e `php_admin_flag[session.upload_progress.enabled] = off` no pool do PHP-FPM (nunca via `.htaccess`/`.user.ini`/`ini_set`), limitar `post_max_size` / `client_max_body_size` na borda, reduzir `pm.max_requests` no PHP-FPM e bloquear `PHP_SESSION_UPLOAD_PROGRESS` no WAF/Nginx.
   - **Em Docker (`php:*-fpm` / `php:*-apache`)**: Atualizar imagem para as tags corrigidas (`8.2.35+`, `8.3.36+`, `8.4.27+`, `8.5.12+`) ou injetar `/usr/local/etc/php/conf.d/99-php2shell-mitigation.ini` e `/usr/local/etc/php-fpm.d/zz-php2shell-pool.conf` via `volumes` (`:ro`), `Dockerfile` ou hotfix em tempo real (`docker exec` + `docker kill --signal=USR2`). Veja detalhes completos em [`security-cves.md`](security-cves.md).
