# Cancela uma consulta assíncrona

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-cancel-query.php

---

# pg\_cancel\_query

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_cancel\_query — 
Cancela uma consulta assíncrona

### Descrição

function **pg\_cancel\_query**([PgSql\Connection](class.pgsql-connection.md) `$connection`): [bool](language.types.boolean.md)

**pg\_cancel\_query()** cancela uma consulta assíncrona enviada com
[pg\_send\_query()](function.pg-send-query.md), [pg\_send\_query\_params()](function.pg-send-query-params.md)
ou [pg\_send\_execute()](function.pg-send-execute.md). Você não pode cancelar uma consulta executada usando
[pg\_query()](function.pg-query.md).

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_cancel\_query()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  if (!pg_connection_busy($dbconn)) {
      pg_send_query($dbconn, "select * from authors; select count(*) from authors;");
  }

  $res1 = pg_get_result($dbconn);
  echo "Primeira chamada para pg_get_result(): $res1\n";
  $rows1 = pg_num_rows($res1);
  echo "$res1 tem $rows1 registros\n\n";

  // Cancela a consulta atualmente em execução. Será a segunda consulta se ainda
  // estiver em execução.
  pg_cancel_query($dbconn);
?>
```

O exemplo acima produzirá:

```
Primeira chamada para pg_get_result(): Resource id #3
Resource id #3 tem 3 registros
```

### Veja também

- [pg\_send\_query()](function.pg-send-query.md) - Envia consulta assíncrona
- [pg\_connection\_busy()](function.pg-connection-busy.md) - Obtém se conexão está ocupada ou não

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
