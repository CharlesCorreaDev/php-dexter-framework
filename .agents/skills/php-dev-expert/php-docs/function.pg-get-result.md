# Obtém o resultado da consulta assíncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-get-result.php

---

# pg\_get\_result

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_get\_result — 
Obtém o resultado da consulta assíncrona

### Descrição

function **pg\_get\_result**([PgSql\Connection](class.pgsql-connection.md) `$connection`): [PgSql\Result](class.pgsql-result.md)|[false](language.types.singleton.md)

**pg\_get\_result()** obtém uma instância de [PgSql\Result](class.pgsql-result.md) de
uma consulta assíncrona executada por
[pg\_send\_query()](function.pg-send-query.md), [pg\_send\_query\_params()](function.pg-send-query-params.md) ou
[pg\_send\_execute()](function.pg-send-execute.md).

[pg\_send\_query()](function.pg-send-query.md) e
outras funções de consulta assíncrona
podem enviar múltiplas consultas para um servidor PostgreSQL e
**pg\_get\_result()** é usado para obter os resultados de cada consulta,
um por um.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

### Valor Retornado

Uma instância [PgSql\Result](class.pgsql-result.md) ou **`false`** se não houver mais resultados disponíveis.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Agora retorna uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_get\_result()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  if (!pg_connection_busy($dbconn)) {
      pg_send_query($dbconn, "select * from authors; select count(*) from authors;");
  }

  $res1 = pg_get_result($dbconn);
  echo "Primeira chamada para pg_get_result(): $res1\n";
  $rows1 = pg_num_rows($res1);
  echo "$res1 has $rows1 records\n\n";

  $res2 = pg_get_result($dbconn);
  echo "Segunda chamada para pg_get_result(): $res2\n";
  $rows2 = pg_num_rows($res2);
  echo "$res2 has $rows2 records\n";
?>
```

O exemplo acima produzirá:

```
Primeira chamada para pg_get_result(): Resource id #3
Resource id #3 has 3 records

Segunda chamada para pg_get_result(): Resource id #4
Resource id #4 has 1 records
```

### Veja também

- [pg\_send\_query()](function.pg-send-query.md) - Envia consulta assíncrona

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
