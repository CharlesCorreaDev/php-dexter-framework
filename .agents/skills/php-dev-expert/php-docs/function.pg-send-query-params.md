# Envia um comando e parâmetros separados para o servidor sem esperar pelo(s) resultado(s)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-send-query-params.php

---

# pg\_send\_query\_params

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

pg\_send\_query\_params — Envia um comando e parâmetros separados para o servidor sem esperar pelo(s) resultado(s)

### Descrição

function **pg\_send\_query\_params**([PgSql\Connection](class.pgsql-connection.md) `$connection`, [string](language.types.string.md) `$query`, [array](language.types.array.md) `$params`): [int](language.types.integer.md)|[bool](language.types.boolean.md)

Envia um comando e parâmetros separados ao servidor sem
esperar pelo(s) resultado(s).

Isto é equivalente a [pg\_send\_query()](function.pg-send-query.md) exceto que os parâmetros de
consulta podem ser especificados separadamente da string
`query`. Os parâmetros da função são
tratados de forma idêntica a [pg\_query\_params()](function.pg-query-params.md). Assim como
[pg\_query\_params()](function.pg-query-params.md), ele não funcionará em conexões PostgreSQL
anteriores à versão 7.4 e permite apenas um comando na string de consulta.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`query`
:   A instrução SQL parametrizada. Deve conter apenas uma única instrução.
    (múltiplas instruções separadas por ponto e vírgula não são permitidas.) Se algum parâmetro
    for usado, ele será chamado de $1, $2, etc.

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

**Exemplo #1 Usando **pg\_send\_query\_params()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  // Usando parâmetros. Observe que não é necessário citar ou escapar
  // o parâmetro.
  pg_send_query_params($dbconn, 'select count(*) from authors where city = $1', array('Perth'));

  // Compara com o uso básico de pg_send_query
  $str = pg_escape_string('Perth');
  pg_send_query($dbconn, "select count(*) from authors where city = '{$str}'");
?>
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
