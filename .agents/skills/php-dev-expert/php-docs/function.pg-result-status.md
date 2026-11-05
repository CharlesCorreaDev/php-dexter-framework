# Obtém o status do resultado da consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-result-status.php

---

# pg\_result\_status

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_result\_status — 
Obtém o status do resultado da consulta

### Descrição

function **pg\_result\_status**([PgSql\Result](class.pgsql-result.md) `$result`, [int](language.types.integer.md) `$mode` = **`PGSQL_STATUS_LONG`**): [string](language.types.string.md)|[int](language.types.integer.md)

**pg\_result\_status()** retorna o status da instância [PgSql\Result](class.pgsql-result.md)
ou a tag de conclusão do comando PostgreSQL associada ao resultado.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`mode`
:   Pode ser a constante **`PGSQL_STATUS_LONG`** para retornar o status numérico
    de `result` ou a constante **`PGSQL_STATUS_STRING`**
    para retornar a etiqueta de comando de `result`.
    Se não for especificado, **`PGSQL_STATUS_LONG`** é o padrão.

### Valor Retornado

Os possíveis valores de retorno são **`PGSQL_EMPTY_QUERY`**,
**`PGSQL_COMMAND_OK`**, **`PGSQL_TUPLES_OK`**, **`PGSQL_TUPLES_CHUNK`**, **`PGSQL_COPY_OUT`**,
**`PGSQL_COPY_IN`**, **`PGSQL_BAD_RESPONSE`**, **`PGSQL_NONFATAL_ERROR`** e
**`PGSQL_FATAL_ERROR`** se **`PGSQL_STATUS_LONG`** for
especificado. Caso contrário, uma [string](language.types.string.md) contendo a etiqueta de comando do PostgreSQL será retornada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_result\_status()****

```
<?php

// Conecta ao banco de dados
$conn = pg_pconnect("dbname=publisher");

// Executa um COPY
$result = pg_query($conn, "COPY authors FROM STDIN;");

// Obtém o status do resultado
$status = pg_result_status($result);

// Determina o status
if ($status == PGSQL_COPY_IN)
   echo "A cópia começou.";
else
   echo "Falha na cópia.";

?>
```

O exemplo acima produzirá:

```
A cópia começou.
```

### Veja também

- [pg\_connection\_status()](function.pg-connection-status.md) - Obtém o status da conexão

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
