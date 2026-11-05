# Seleciona registros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-select.php

---

# pg\_select

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

pg\_select — 
Seleciona registros

### Descrição

function **pg\_select**(  
    [PgSql\Connection](class.pgsql-connection.md) `$connection`,  
    [string](language.types.string.md) `$table_name`,  
    [array](language.types.array.md) `$conditions` = [],  
    [int](language.types.integer.md) `$flags` = **`PGSQL_DML_EXEC`**,  
    [int](language.types.integer.md) `$mode` = **`PGSQL_ASSOC`**  
): [array](language.types.array.md)|[string](language.types.string.md)|[false](language.types.singleton.md)

**pg\_select()** seleciona registros especificados por
`conditions` que tem
`field=>value`. Para uma consulta bem-sucedida, ele retorna um
array contendo todos os registros e campos que correspondem à condição
especificada por `conditions`.

Se `flags` estiver definido,
[pg\_convert()](function.pg-convert.md) será aplicado às
`conditions` com as opções (flags) especificadas.

Se `mode` for definido,
o valor de retorno estará na forma de um array
com **`PGSQL_NUM`**, um array associativo
com **`PGSQL_ASSOC`** (padrão) ou ambos
com **`PGSQL_BOTH`**.

Por padrão, **pg\_select()** passa valores brutos. Os valores
devem ter escape ou a opção PGSQL\_DML\_ESCAPE deve ser
especificada. PGSQL\_DML\_ESCAPE cita e escapa
parâmetros/identificadores. Portanto, os nomes de tabelas/colunas tornaram-se
sensíveis a maiúsculas e minúsculas.

Observe que nem o escape nem a consulta preparada podem proteger a consulta LIKE,
JSON, Array, Regex, etc. Esses parâmetros devem ser tratados
de acordo com seus contextos. ou seja, escapar/validar valores.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`table_name`
:   Nome da tabela da qual selecionar linhas.

`conditions`
:   Um [array](language.types.array.md) cujas chaves são nomes de campos na tabela `table_name`
    e cujos valores são as condições que uma linha deve atender para ser recuperada.
    A partir do PHP 8.4.0, quando um array vazio for fornecido, nenhuma condição será aplicada.
    Anteriormente, a função falhava com um argumento `conditions` vazio.

`flags`
:   Qualquer número de **`PGSQL_CONV_FORCE_NULL`**,
    **`PGSQL_DML_NO_CONV`**,
    **`PGSQL_DML_ESCAPE`**,
    **`PGSQL_DML_EXEC`**,
    **`PGSQL_DML_ASYNC`** ou
    **`PGSQL_DML_STRING`** combinado. Se **`PGSQL_DML_STRING`** fizer parte dos
    `flags` então a string de consulta será retornada. Quando **`PGSQL_DML_NO_CONV`**
    ou **`PGSQL_DML_ESCAPE`** está definido, ele não chama [pg\_convert()](function.pg-convert.md) internamente.

`mode`
:   Qualquer número de **`PGSQL_ASSOC`**,
    **`PGSQL_NUM`** ou
    **`PGSQL_BOTH`**
    Se **`PGSQL_ASSOC`** for definido o valor de retorno será um [array](language.types.array.md) associativo,
    com **`PGSQL_NUM`** o valor de retorno será um [array](language.types.array.md) , e
    com **`PGSQL_BOTH`** o valor de retorno será um
    [array](language.types.array.md) associativo e indexado numericamente.

### Valor Retornado

Retorna [string](language.types.string.md) se **`PGSQL_DML_STRING`** for passado
via `flags`, caso contrário, retorna um [array](language.types.array.md) em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `conditions` agora é opcional. |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 7.1.0 | O parâmetro `mode` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **pg\_select()****

```
<?php
  $db = pg_connect('dbname=foo');
  // Isso é um tanto seguro, já que todos os valores têm escape.
  // No entanto, o PostgreSQL suporta JSON/Array. Estes não são
  // seguros nem por escape nem por consulta preparada.
  $rec = pg_select($db, 'post_log', $_POST, PG_DML_ESCAPE);
  if ($rec) {
      echo "Registros selecionados\n";
      var_dump($rec);
  } else {
      echo "Usuário deve ter enviado entradas erradas\n";
  }
?>
```

### Veja também

- [pg\_convert()](function.pg-convert.md) - Converte valores de array associativo em formas adequadas para instruções SQL

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
