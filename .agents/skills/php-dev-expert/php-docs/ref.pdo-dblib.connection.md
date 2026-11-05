# Conectando-se aos bancos de dados Microsoft SQL Server e Sybase

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-dblib.connection.php

---

# PDO\_DBLIB DSN

(PECL PDO\_DBLIB >= 0.9.0)

PDO\_DBLIB DSN — Conectando-se aos bancos de dados Microsoft SQL Server e Sybase

### Descrição

O Nome da Fonte de Dados (DSN) PDO\_DBLIB é composto pelos seguintes elementos:

Prefixo DSN
:   O prefixo DSN é **`sybase:`** se o PDO\_DBLIB foi
    vinculado às bibliotecas Sybase ct-lib,
    **`mssql:`** se o PDO\_DBLIB foi vinculado às
    bibliotecas do Microsoft SQL Server ou **`dblib :`** se
    o PDO\_DBLIB foi vinculado às bibliotecas FreeTDS.

`host`
:   O nome do servidor onde o banco de dados reside.
    O padrão é 127.0.0.1.

`dbname`
:   O nome do banco de dados.

`charset`
:   O conjunto de caracteres do cliente.

`appname`
:   O nome da aplicação (usado nos processos do sistema).
    O padrão é "PHP Generic DB-lib" ou "PHP freetds".

`secure`
:   Atualmente não utilizado.

### Examples

**Exemplo #1 Exemplos de DSN PDO\_DBLIB**

Os exemplos a seguir mostram um DSN PDO\_DBLIB para conexão com
bancos de dados Microsoft SQL Server e Sybase:

```
mssql:host=localhost;dbname=testdb
sybase:host=localhost;dbname=testdb
dblib:host=localhost;dbname=testdb
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
