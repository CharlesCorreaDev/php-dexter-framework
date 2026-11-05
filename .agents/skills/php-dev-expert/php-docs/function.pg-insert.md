# Insere array na tabela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-insert.php

---

# pg\_insert

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

pg\_insert — 
Insere array na tabela

### Descrição

function **pg\_insert**(  
    [PgSql\Connection](class.pgsql-connection.md) `$connection`,  
    [string](language.types.string.md) `$table_name`,  
    [array](language.types.array.md) `$values`,  
    [int](language.types.integer.md) `$flags` = **`PGSQL_DML_EXEC`**  
): [PgSql\Result](class.pgsql-result.md)|[string](language.types.string.md)|[bool](language.types.boolean.md)

**pg\_insert()** insere os valores
de `values` na tabela especificada
por `table_name`.

Se `flags` for especificado,
[pg\_convert()](function.pg-convert.md) será aplicado aos
`values` com as opções (flags) especificadas.

Por padrão, **pg\_insert()** passa valores brutos.
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
:   Nome da tabela na qual inserir linhas. A tabela `table_name` deve ter pelo menos
    tantas colunas quanto `values` tem elementos.

`values`
:   Um [array](language.types.array.md) cujas chaves são nomes de campos na tabela `table_name`,
    e cujos valores são os valores dos campos que serão inseridos.

`flags`
:   Qualquer número de **`PGSQL_CONV_OPTS`**,
    **`PGSQL_DML_NO_CONV`**,
    **`PGSQL_DML_ESCAPE`**,
    **`PGSQL_DML_EXEC`**,
    **`PGSQL_DML_ASYNC`** ou
    **`PGSQL_DML_STRING`** combinados. Se **`PGSQL_DML_STRING`** fizer parte dos
    `flags` então a string de consulta será retornada. Quando **`PGSQL_DML_NO_CONV`**
    ou **`PGSQL_DML_ESCAPE`** está definido, ele não chama [pg\_convert()](function.pg-convert.md) internamente.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.. Ou retorna um [string](language.types.string.md) em caso de sucesso se **`PGSQL_DML_STRING`** for passado
via `flags`.

### Erros/Exceções

Um [ValueError](class.valueerror.md) é lançado quando a tabela especificada é inválida.

Um [ValueError](class.valueerror.md) ou [TypeError](class.typeerror.md) é lançado
quando o valor ou tipo de campo não corresponde corretamente ao tipo do PostgreSQL.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Agora lança um erro [ValueError](class.valueerror.md) quando a tabela especificada é inválida; anteriormente um **`E_WARNING`** era emitido. |
| 8.3.0 | Agora lança um erro [ValueError](class.valueerror.md) ou [TypeError](class.typeerror.md) quando o valor ou tipo de campo não corresponde corretamente ao tipo do PostgreSQL; anteriormente um **`E_WARNING`** era emitido. |
| 8.1.0 | Agora retorna uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_insert()****

```
<?php
  $dbconn = pg_connect('dbname=foo');
  // Isso é um tanto seguro, já que todos os valores têm escape.
  // No entanto, o PostgreSQL suporta JSON/Array. Estes não são
  // seguros nem por escape nem por consulta preparada.
  $res = pg_insert($dbconn, 'post_log', $_POST, PGSQL_DML_ESCAPE);
  if ($res) {
      echo "Os dados POST foram registrados com sucesso\n";
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
