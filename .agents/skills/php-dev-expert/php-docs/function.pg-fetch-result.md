# Retorna valores de uma instância de resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-fetch-result.php

---

# pg\_fetch\_result

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_fetch\_result — Retorna valores de uma instância de resultado

### Descrição

function **pg\_fetch\_result**([PgSql\Result](class.pgsql-result.md) `$result`, [string](language.types.string.md)|[false](language.types.singleton.md)|[null](language.types.null.md) `$row`, [mixed](language.types.mixed.md) `$field`): [string](language.types.string.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

function **pg\_fetch\_result**([PgSql\Result](class.pgsql-result.md) `$result`, [mixed](language.types.mixed.md) `$field`): [string](language.types.string.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

**pg\_fetch\_result()** retorna o valor de uma determinada
linha e campo (coluna) em uma instância [PgSql\Result](class.pgsql-result.md).

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_result()**.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`row`
:   Número da linha no resultado a ser buscado. As linhas são numeradas de 0 para cima. Se omitido,
    a próxima linha será buscada.

`field`
:   Uma [string](language.types.string.md) representando o nome do campo (coluna) a ser buscado, caso contrário,
    um [int](language.types.integer.md) representando o número do campo a ser buscado. Os campos são
    numerados de 0 para cima.

### Valor Retornado

Booleano é retornado como "t" ou "f". Todos os
outros tipos, incluindo arrays, são retornados como strings formatadas
da mesma maneira padrão do PostgreSQL que você veria no programa
**psql**. Os valores `NULL` do banco de
dados são retornados como **`null`**.

**`false`** é retornado se `row` exceder o número
de linhas no conjunto ou em qualquer outro erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | A assinatura com dois argumentos da função **pg\_fetch\_result()** (`result`, `field`) foi descontinuada. Em seu lugar, use a assinatura com três argumentos definindo `row` para **`null`**. |
| 8.3.0 | `row` agora é anulável. |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_fetch\_result()****

```
<?php
$db = pg_connect("dbname=users user=me");

$res = pg_query($db, "SELECT 1 UNION ALL SELECT 2");

$val = pg_fetch_result($res, 1, 0);

echo "O primeiro campo da segunda linha é: ", $val, "\n";
?>
```

O exemplo acima produzirá:

```
O primeiro campo da segunda linha é: 2
```

### Veja também

- [pg\_query()](function.pg-query.md) - Executa uma consulta
- [pg\_fetch\_array()](function.pg-fetch-array.md) - Busca uma linha como um array

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
