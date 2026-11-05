# Exclui registros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-delete.php

---

# pg\_delete

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

pg\_delete — 
Exclui registros

### Descrição

function **pg\_delete**(  
    [PgSql\Connection](class.pgsql-connection.md) `$connection`,  
    [string](language.types.string.md) `$table_name`,  
    [array](language.types.array.md) `$conditions`,  
    [int](language.types.integer.md) `$flags` = **`PGSQL_DML_EXEC`**  
): [string](language.types.string.md)|[bool](language.types.boolean.md)

**pg\_delete()** exclui registros de uma tabela
especificada pelas chaves e valores em `conditions`.

Se `flags` for especificado,
[pg\_convert()](function.pg-convert.md) será aplicado às
`conditions` com as opções especificadas.

Por padrão, **pg\_delete()** passa valores brutos.
Os valores devem ser escapados ou a opção **`PGSQL_DML_ESCAPE`**
deve ser especificado em `flags`.
**`PGSQL_DML_ESCAPE`** cita e escapa parâmetros/identificadores.
Portanto, os nomes de tabelas/colunas diferenciam maiúsculas de minúsculas.

Observe que nem o escape nem a consulta preparada podem proteger consultas LIKE,
JSON, Array, Regex, etc. Esses parâmetros devem ser tratados
de acordo com seus contextos. ou seja, escapar/validar valores.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`table_name`
:   Nome da tabela da qual as linhas serão excluídas.

`conditions`
:   Um [array](language.types.array.md) cujas chaves são nomes de campos na tabela `table_name`
    e cujos valores são os valores dos campos que devem ser excluídos.

`flags`
:   Qualquer número de **`PGSQL_CONV_FORCE_NULL`**,
    **`PGSQL_DML_NO_CONV`**,
    **`PGSQL_DML_ESCAPE`**,
    **`PGSQL_DML_EXEC`**,
    **`PGSQL_DML_ASYNC`** ou
    **`PGSQL_DML_STRING`** combinado. Se **`PGSQL_DML_STRING`** fizer parte de
    `flags` então a string de consulta é retornada. Quando **`PGSQL_DML_NO_CONV`**
    ou **`PGSQL_DML_ESCAPE`** está definido, ele não chama [pg\_convert()](function.pg-convert.md) internamente.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha. Retorna [string](language.types.string.md) se **`PGSQL_DML_STRING`** for passado
através de `flags`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_delete()****

```
<?php
  $db = pg_connect('dbname=foo');
  // Isso é um tanto seguro, já que todos os valores têm escape.
  // No entanto, o PostgreSQL suporta JSON/Array. Eles não são
  // seguros nem por escape nem por consulta preparada.
  $res = pg_delete($db, 'post_log', $_POST, PG_DML_ESCAPE);
  if ($res) {
      echo "Dados POST foram excluídos: $res\n";
  } else {
      echo "O usuário deve ter enviado entradas erradas\n";
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
