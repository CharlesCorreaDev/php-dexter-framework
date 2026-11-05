# Envia uma solicitação para criar uma instrução preparada com os parâmetros fornecidos, sem esperar pela conclusão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-send-prepare.php

---

# pg\_send\_prepare

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

pg\_send\_prepare — Envia uma solicitação para criar uma instrução preparada com os parâmetros fornecidos, sem esperar pela conclusão

### Descrição

function **pg\_send\_prepare**([PgSql\Connection](class.pgsql-connection.md) `$connection`, [string](language.types.string.md) `$statement_name`, [string](language.types.string.md) `$query`): [int](language.types.integer.md)|[bool](language.types.boolean.md)

Envia uma solicitação para criar uma instrução preparada com os parâmetros fornecidos,
sem aguardar a conclusão.

Esta é uma versão assíncrona de [pg\_prepare()](function.pg-prepare.md): ela retorna **`true`** se conseguiu
despachar a solicitação e **`false`** se não. Após uma chamada bem-sucedida, chame
[pg\_get\_result()](function.pg-get-result.md) para determinar se o servidor criou com êxito a
instrução preparada. Os parâmetros da função são tratados de forma idêntica a
[pg\_prepare()](function.pg-prepare.md). Assim como [pg\_prepare()](function.pg-prepare.md), não funcionará
em versões anteriores à 7.4 do PostgreSQL.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`statement_name`
:   O nome para dar a declaração preparada. Deve ser exclusivo por conexão. Se
    "" for especificado, uma instrução sem nome será criada, substituindo qualquer
    instrução sem nome definida anteriormente.

`query`
:   A instrução SQL parametrizada. Deve conter apenas uma única instrução.
    (múltiplas instruções separadas por ponto e vírgula não são permitidas.) Se algum parâmetro
    for usado, ele será chamado de $1, $2, etc.

### Valor Retornado

Retorna **`true`** em caso de sucesso, **`false`** ou `0` em caso de falha. Use [pg\_get\_result()](function.pg-get-result.md)
para determinar o resultado da consulta.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Usando **pg\_send\_prepare()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die("Não foi possível conectar");

  // Prepara uma consulta para execução
  if (!pg_connection_busy($dbconn)) {
    pg_send_prepare($dbconn, "my_query", 'SELECT * FROM shops WHERE name = $1');
    $res1 = pg_get_result($dbconn);
  }

  // Executa a consulta preparada. Observe que não é necessário escapar
  // a string "Joe's Widgets" de qualquer forma
  if (!pg_connection_busy($dbconn)) {
    pg_send_execute($dbconn, "my_query", array("Joe's Widgets"));
    $res2 = pg_get_result($dbconn);
  }

  // Executa a mesma consulta preparada, desta vez com um parâmetro diferente
  if (!pg_connection_busy($dbconn)) {
    pg_send_execute($dbconn, "my_query", array("Clothes Clothes Clothes"));
    $res3 = pg_get_result($dbconn);
  }

?>
```

### Veja também

- [pg\_connect()](function.pg-connect.md) - Abre uma conexão PostgreSQL
- [pg\_pconnect()](function.pg-pconnect.md) - Abre uma conexão PostgreSQL persistente
- [pg\_execute()](function.pg-execute.md) - Envia uma solicitação para executar uma instrução preparada com determinados parâmetros e aguarda o resultado
- [pg\_send\_execute()](function.pg-send-execute.md) - Envia uma solicitação para executar uma instrução preparada com determinados parâmetros, sem esperar pelo(s) resultado(s)
- [pg\_send\_query\_params()](function.pg-send-query-params.md) - Envia um comando e parâmetros separados para o servidor sem esperar pelo(s) resultado(s)

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
