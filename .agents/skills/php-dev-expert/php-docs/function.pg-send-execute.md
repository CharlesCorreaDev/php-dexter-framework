# Envia uma solicitação para executar uma instrução preparada com determinados parâmetros, sem esperar pelo(s) resultado(s)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-send-execute.php

---

# pg\_send\_execute

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

pg\_send\_execute — Envia uma solicitação para executar uma instrução preparada com determinados parâmetros, sem esperar pelo(s) resultado(s)

### Descrição

function **pg\_send\_execute**([PgSql\Connection](class.pgsql-connection.md) `$connection`, [string](language.types.string.md) `$statement_name`, [array](language.types.array.md) `$params`): [int](language.types.integer.md)|[bool](language.types.boolean.md)

Envia uma solicitação para executar uma instrução preparada com determinados parâmetros,
sem esperar pelo(s) resultado(s).

Isto é semelhante a [pg\_send\_query\_params()](function.pg-send-query-params.md), mas o comando a ser executado é especificado
nomeando uma instrução previamente preparada, em vez de fornecer uma string de consulta. Os
parâmetros da função são tratados de forma idêntica a [pg\_execute()](function.pg-execute.md).
Assim como [pg\_execute()](function.pg-execute.md), não funcionará em versões anteriores à 7.4 do
PostgreSQL.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`statement_name`
:   O nome da instrução preparada a ser executada. Se
    "" for especificado, a instrução sem nome será executada. O nome deve
    ter sido preparado previamente usando [pg\_prepare()](function.pg-prepare.md),
    [pg\_send\_prepare()](function.pg-send-prepare.md) ou um comando SQL
    `PREPARE`.

`params`
:   Um array de valores de parâmetros para substituir os espaços reservados $1, $2, etc. na
    string de consulta preparada original. O número de elementos no array
    deve corresponder ao número de espaços reservados.

### Valor Retornado

Retorna **`true`** em caso de sucesso, **`false`** ou `0` em caso de falha. Use [pg\_get\_result()](function.pg-get-result.md)
para determinar o resultado da consulta.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Usando **pg\_send\_execute()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  // Preparar uma consulta para execução
  if (!pg_connection_busy($dbconn)) {
    pg_send_prepare($dbconn, "my_query", 'SELECT * FROM shops WHERE name = $1');
    $res1 = pg_get_result($dbconn);
  }

  // Execute a consulta preparada. Observe que não é necessário escapar
  // a string "Joe's Widgets" de nenhuma forma
  if (!pg_connection_busy($dbconn)) {
    pg_send_execute($dbconn, "my_query", array("Joe's Widgets"));
    $res2 = pg_get_result($dbconn);
  }

  // Execute a mesma consulta preparada, desta vez com um parâmetro diferente
  if (!pg_connection_busy($dbconn)) {
    pg_send_execute($dbconn, "my_query", array("Clothes Clothes Clothes"));
    $res3 = pg_get_result($dbconn);
  }

?>
```

### Veja também

- [pg\_prepare()](function.pg-prepare.md) - Envia uma solicitação ao servidor para criar uma instrução preparada com os
  parâmetros fornecidos e aguarda a conclusão
- [pg\_send\_prepare()](function.pg-send-prepare.md) - Envia uma solicitação para criar uma instrução preparada com os parâmetros fornecidos, sem esperar pela conclusão
- [pg\_execute()](function.pg-execute.md) - Envia uma solicitação para executar uma instrução preparada com determinados parâmetros e aguarda o resultado

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
