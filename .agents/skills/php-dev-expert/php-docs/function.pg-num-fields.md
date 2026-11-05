# Retorna o número de campos em um resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-num-fields.php

---

# pg\_num\_fields

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_num\_fields — Retorna o número de campos em um resultado

### Descrição

function **pg\_num\_fields**([PgSql\Result](class.pgsql-result.md) `$result`): [int](language.types.integer.md)

**pg\_num\_fields()** retorna o número de campos
(colunas) na instância [PgSql\Result](class.pgsql-result.md).

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_numfields()**.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

### Valor Retornado

O número de campos (colunas) no resultado. Em caso de erro, -1 é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_num\_fields()****

```
<?php
$result = pg_query($conn, "SELECT 1, 2");

$num = pg_num_fields($result);

echo $num . " campo(s) retornado(s).\n";
?>
```

O exemplo acima produzirá:

```
2 campo(s) retornado(s).
```

### Veja também

- [pg\_num\_rows()](function.pg-num-rows.md) - Retorna o número de linhas em um resultado
- [pg\_affected\_rows()](function.pg-affected-rows.md) - Retorna o número de registros afetados (tuplas)

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
