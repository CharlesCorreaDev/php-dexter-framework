# Atualiza tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-update.php

---

# pg\_update

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

pg\_update — 
Atualiza tabela

### Descrição

function **pg\_update**(  
    [PgSql\Connection](class.pgsql-connection.md) `$connection`,  
    [string](language.types.string.md) `$table_name`,  
    [array](language.types.array.md) `$values`,  
    [array](language.types.array.md) `$conditions`,  
    [int](language.types.integer.md) `$flags` = **`PGSQL_DML_EXEC`**  
): [string](language.types.string.md)|[bool](language.types.boolean.md)

**pg\_update()** atualiza registros que correspondem a
`conditions` com `values`.

Se `flags` for especificado,
[pg\_convert()](function.pg-convert.md) será aplicado aos
`values` com as opções especificadas.

Por padrão, **pg\_update()** passa valores brutos.
Os valores devem ser escapados ou a opção **`PGSQL_DML_ESCAPE`**
deve ser especificado em `flags`.
**`PGSQL_DML_ESCAPE`** cita e escapa parâmetros/identificadores.
Portanto, os nomes de tabelas/colunas diferenciam maiúsculas de minúsculas.

Observe que nem o escape nem a consulta preparada podem proteger consultas LIKE,
JSON, Array, Regex, etc. Estes parâmetros devem ser manipulados
de acordo com seus contextos, ou seja, escapar/validar valores.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`table_name`
:   Nome da tabela na qual as linhas serão atualizadas.

`values`
:   Um [array](language.types.array.md) cujas chaves são nomes de campos na tabela `table_name`
    e cujos valores são os valores para os quais as linhas correspondentes devem ser atualizadas.

`conditions`
:   Um [array](language.types.array.md) cujas chaves são nomes de campos na tabela `table_name`
    e cujos valores são as condições que uma linha deve atender para ser atualizada.

`flags`
:   Qualquer número de **`PGSQL_CONV_FORCE_NULL`**,
    **`PGSQL_DML_NO_CONV`**,
    **`PGSQL_DML_ESCAPE`**,
    **`PGSQL_DML_EXEC`**,
    **`PGSQL_DML_ASYNC`** ou
    **`PGSQL_DML_STRING`** combinado. Se **`PGSQL_DML_STRING`** fizer parte dos
    `flags` então a string de consulta será retornada. Quando **`PGSQL_DML_NO_CONV`**
    ou **`PGSQL_DML_ESCAPE`** está definido, ele não chama [pg\_convert()](function.pg-convert.md) internamente.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha. Retorna [string](language.types.string.md) se **`PGSQL_DML_STRING`** for passado
através de `flags`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_update()****

```
<?php
  $db = pg_connect('dbname=foo');
  $data = array('field1'=>'AA', 'field2'=>'BB');
  // Isso é um tanto seguro, já que todos os valores têm escape.
  // No entanto, o PostgreSQL suporta JSON/Array. Estes não são
  // seguros nem por escape nem por consulta preparada.
  $res = pg_update($db, 'post_log', $_POST, $data);
  if ($res) {
      echo "Dados foram atualizados: $res\n";
  } else {
      echo "Usuário deve ter enviado dados errados\n";
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
