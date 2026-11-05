# Determina a visibilidade das mensagens de erro do contexto retornadas por pg_last_error
   e pg_result_error

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-set-error-context-visibility.php

---

# pg\_set\_error\_context\_visibility

(PHP 8 >= 8.3.0)

pg\_set\_error\_context\_visibility — 
Determina a visibilidade das mensagens de erro do contexto retornadas por [pg\_last\_error()](function.pg-last-error.md)
e [pg\_result\_error()](function.pg-result-error.md)

### Descrição

function **pg\_set\_error\_context\_visibility**([PgSql\Connection](class.pgsql-connection.md) `$connection`, [int](language.types.integer.md) `$visibility`): [int](language.types.integer.md)

Determina a visibilidade das mensagens de erro do contexto retornadas por [pg\_last\_error()](function.pg-last-error.md)
e [pg\_result\_error()](function.pg-result-error.md)

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`visibility`
:   A visibilidade necessária: **`PGSQL_SHOW_CONTEXT_NEVER`**,
    **`PGSQL_SHOW_CONTEXT_ERRORS`**
    ou **`PGSQL_SHOW_CONTEXT_ALWAYS`**.

### Valor Retornado

O nível de visibilidade anterior: **`PGSQL_SHOW_CONTEXT_NEVER`**,
**`PGSQL_SHOW_CONTEXT_ERRORS`**
ou **`PGSQL_SHOW_CONTEXT_ALWAYS`**.

### Examples

**Exemplo #1 Exemplo de **pg\_set\_error\_context\_visibility()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  if (!pg_connection_busy($dbconn)) {
      pg_send_query($dbconn, "select * from doesnotexist;");
  }

  pg_set_error_context_visibility($dbconn, PGSQL_SHOW_CONTEXT_ALWAYS);
  $res1 = pg_get_result($dbconn);
  echo pg_result_error($res1);
?>
```

### Veja também

- [pg\_last\_error()](function.pg-last-error.md) - Obtém a última string da mensagem de erro de uma conexão
- [pg\_result\_error()](function.pg-result-error.md) - Obtém mensagem de erro associada ao resultado

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
