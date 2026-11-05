# Obtém mensagem de erro associada ao resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-result-error.php

---

# pg\_result\_error

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_result\_error — 
Obtém mensagem de erro associada ao resultado

### Descrição

function **pg\_result\_error**([PgSql\Result](class.pgsql-result.md) `$result`): [string](language.types.string.md)|[false](language.types.singleton.md)

**pg\_result\_error()** retorna qualquer mensagem de erro
associada à instância de `result`. Portanto,
o usuário tem mais chances de receber a mensagem de erro correta do que
com [pg\_last\_error()](function.pg-last-error.md).

A função [pg\_result\_error\_field()](function.pg-result-error-field.md) pode fornecer muito mais
detalhes sobre erros de resultados do que **pg\_result\_error()**.

Porque [pg\_query()](function.pg-query.md) retorna **`false`** se a consulta falhar,
você deverá usar [pg\_send\_query()](function.pg-send-query.md) e
[pg\_get\_result()](function.pg-get-result.md) para obter o identificador do resultado.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

### Valor Retornado

Retorna uma [string](language.types.string.md). Retorna uma string vazia se não houver erro. Se houver um erro associado ao
parâmetro `result`, retorna **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_result\_error()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  if (!pg_connection_busy($dbconn)) {
      pg_send_query($dbconn, "select * from doesnotexist;");
  }

  $res1 = pg_get_result($dbconn);
  echo pg_result_error($res1);
?>
```

### Veja também

- [pg\_result\_error\_field()](function.pg-result-error-field.md) - Retorna um campo individual de um relatório de erros
- [pg\_query()](function.pg-query.md) - Executa uma consulta
- [pg\_send\_query()](function.pg-send-query.md) - Envia consulta assíncrona
- [pg\_get\_result()](function.pg-get-result.md) - Obtém o resultado da consulta assíncrona
- [pg\_last\_error()](function.pg-last-error.md) - Obtém a última string da mensagem de erro de uma conexão
- [pg\_last\_notice()](function.pg-last-notice.md) - Retorna a última mensagem de aviso do servidor PostgreSQL

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
