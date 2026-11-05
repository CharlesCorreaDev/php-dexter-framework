# Retorna um campo individual de um relatório de erros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-result-error-field.php

---

# pg\_result\_error\_field

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

pg\_result\_error\_field — Retorna um campo individual de um relatório de erros

### Descrição

function **pg\_result\_error\_field**([PgSql\Result](class.pgsql-result.md) `$result`, [int](language.types.integer.md) `$field_code`): [string](language.types.string.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

**pg\_result\_error\_field()** retorna um dos campos de mensagem de erro
detalhados associados à instância de `result`. O campo de erro é especificado pelo
`field_code`.

Porque [pg\_query()](function.pg-query.md) e [pg\_query\_params()](function.pg-query-params.md) retornam **`false`** se a consulta falhar,
você deverá usar [pg\_send\_query()](function.pg-send-query.md) e
[pg\_get\_result()](function.pg-get-result.md) para obter o identificador do resultado.

Se você precisar obter informações adicionais sobre erros de consultas [pg\_query()](function.pg-query.md) com falha,
use [pg\_set\_error\_verbosity()](function.pg-set-error-verbosity.md) e [pg\_last\_error()](function.pg-last-error.md)
e então analise o resultado.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`field_code`
:   Os possíveis valores de `field_code` são: **`PGSQL_DIAG_SEVERITY`**,
    **`PGSQL_DIAG_SQLSTATE`**, **`PGSQL_DIAG_MESSAGE_PRIMARY`**,
    **`PGSQL_DIAG_MESSAGE_DETAIL`**,
    **`PGSQL_DIAG_MESSAGE_HINT`**, **`PGSQL_DIAG_STATEMENT_POSITION`**,
    **`PGSQL_DIAG_INTERNAL_POSITION`**,
    **`PGSQL_DIAG_INTERNAL_QUERY`**,
    **`PGSQL_DIAG_CONTEXT`**, **`PGSQL_DIAG_SOURCE_FILE`**,
    **`PGSQL_DIAG_SOURCE_LINE`** ou
    **`PGSQL_DIAG_SOURCE_FUNCTION`**.

### Valor Retornado

Uma [string](language.types.string.md) contendo o conteúdo do campo de erro, **`null`** se o campo não existir ou **`false`**
em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_result\_error\_field()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  if (!pg_connection_busy($dbconn)) {
      pg_send_query($dbconn, "select * from doesnotexist;");
  }

  $res1 = pg_get_result($dbconn);
  echo pg_result_error_field($res1, PGSQL_DIAG_SQLSTATE);
?>
```

### Veja também

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
