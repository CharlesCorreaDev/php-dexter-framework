# Conectando-se a bancos de dados PostgreSQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-pgsql.connection.php

---

# PDO\_PGSQL DSN

(PHP 5 >= 5.1.0, PHP 7, PECL PDO\_PGSQL >= 0.1.0)

PDO\_PGSQL DSN — Conectando-se a bancos de dados PostgreSQL

### Descrição

O nome da fonte de dados (DSN) PDO\_PGSQL é composto pelos seguintes elementos, delimitados por espaços ou ponto e vírgula:

DSN prefix
:   O prefixo DSN é **`pgsql:`**.

`host`
:   O nome do host no qual o servidor de banco de dados reside.

`port`
:   A porta na qual o servidor de banco de dados está sendo executado.

`dbname`
:   O nome do banco de dados.

`user`
:   O nome do usuário para a conexão. Se você especificar o nome do usuário
    no DSN, o PDO ignorará o valor do argumento do nome do usuário no
    construtor do PDO.

`password`
:   A senha do usuário para a conexão. Se você especificar a
    senha no DSN, o PDO ignorará o valor do argumento de senha
    no construtor do PDO.

`sslmode`
:   O modo SSL. Os valores aceitos são `disable`,
    `allow`, `prefer`,
    `require`, `verify-ca` e
    `verify-full`; seus significados estão listados na
    [» Documentação do PostgreSQL](https://www.postgresql.org/docs/current/interactive/).
    Muitos serviços hospedados do PostgreSQL requerem uma conexão criptogradada, portanto
    `require` ou um modo mais estrito é necessário para conexão a eles.

> **Nota**:
>
> A partir do PHP 8.4.0, as credenciais especificadas no DSN
> (`user` e `password`) têm prioridade
> sobre os argumentos correspondentes passados para o
> construtor [PDO](class.pdo.md). Em versões anteriores, os
> argumentos do construtor PDO tinham precedência.

> **Nota**:
>
> Todos os pontos e vírgulas na string DSN são substituídos por espaços, porque o PostgreSQL
> espera esse formato. Isso implica que pontos e vírgulas em qualquer um dos componentes
> (por exemplo, `password` ou `dbname`) não são
> suportados.

### Examples

**Exemplo #1 Exemplos de DSN PDO\_PGSQL**

O exemplo a seguir mostra um DSN PDO\_PGSQL para conexão a
um banco de dados PostgreSQL:

```
pgsql:host=localhost;port=5432;dbname=testdb;user=bruce;password=mypass
```

O exemplo a seguir mostra um DSN PDO\_PGSQL para conexão a
um banco de dados PostgreSQL via soquete unix /tmp/.s.PGSQL.5432:

```
pgsql:host=/tmp;port=5432;dbname=testdb;user=bruce;password=mypass
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
