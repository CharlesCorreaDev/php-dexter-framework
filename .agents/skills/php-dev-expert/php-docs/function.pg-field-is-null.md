# Testa se um campo é SQL NULL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-field-is-null.php

---

# pg\_field\_is\_null

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_field\_is\_null — Testa se um campo é SQL `NULL`

### Descrição

function **pg\_field\_is\_null**([PgSql\Result](class.pgsql-result.md) `$result`, [string](language.types.string.md)|[false](language.types.singleton.md)|[null](language.types.null.md) `$row`, [mixed](language.types.mixed.md) `$field`): [int](language.types.integer.md)

function **pg\_field\_is\_null**([PgSql\Result](class.pgsql-result.md) `$result`, [mixed](language.types.mixed.md) `$field`): [int](language.types.integer.md)

**pg\_field\_is\_null()** testa se um campo em uma instância [PgSql\Result](class.pgsql-result.md)
é SQL `NULL` ou não.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_fieldisnull()**.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`row`
:   Número da linha no resultado a ser buscado. As linhas são numeradas de 0 para cima. Se omitido,
    a linha atual será buscada.

`field`
:   Número do campo (começando em 0) como um [int](language.types.integer.md) ou
    o nome do campo como uma [string](language.types.string.md).

### Valor Retornado

Retorna `1` se o campo na linha fornecida for SQL `NULL`, `0`
se não for. **`false`** é retornado se a linha estiver fora do intervalo ou em caso de qualquer outro erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | A assinatura com dois argumentos da função **pg\_field\_is\_null()** (`result`, `field`) foi descontinuada. Em seu lugar, use a assinatura com três argumentos definindo `row` para **`null`**. |
| 8.3.0 | `row` agora é anulável. |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_field\_is\_null()****

```
<?php
  $dbconn = pg_connect("dbname=publisher") or die ("Não foi possível conectar");
  $res = pg_query($dbconn, "select * from authors where author = 'Orwell'");
  if ($res) {
      if (pg_field_is_null($res, 0, "year") == 1) {
          echo "O valor do campo year é nulo.\n";
      }
      if (pg_field_is_null($res, 0, "year") == 0) {
          echo "O valor do campo year não é nulo.\n";
    }
 }
?>
```

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
