# Retorna o número de registros afetados (tuplas)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-affected-rows.php

---

# pg\_affected\_rows

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_affected\_rows — Retorna o número de registros afetados (tuplas)

### Descrição

function **pg\_affected\_rows**([PgSql\Result](class.pgsql-result.md) `$result`): [int](language.types.integer.md)

**pg\_affected\_rows()** retorna o número de tuplas
(instâncias/registros/linhas) afetadas pelas consultas
`INSERT`, `UPDATE` e
`DELETE`.

O servidor também retorna o número de selecionadas.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_cmdtuples()**.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

### Valor Retornado

O número de linhas afetadas pela consulta. Se nenhuma tupla for
afetada, retornará `0`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_affected\_rows()****

```
<?php
$result = pg_query($conn, "INSERT INTO authors VALUES ('Orwell', 2002, 'Animal Farm')");

$cmdtuples = pg_affected_rows($result);

echo $cmdtuples . " tuplas são afetadas.\n";
?>
```

O exemplo acima produzirá:

```
1  tuplas são afetadas.
```

### Veja também

- [pg\_query()](function.pg-query.md) - Executa uma consulta
- [pg\_query\_params()](function.pg-query-params.md) - Envia um comando ao servidor e aguarda o resultado, com a capacidade de passar parâmetros separadamente do texto do comando SQL
- [pg\_execute()](function.pg-execute.md) - Envia uma solicitação para executar uma instrução preparada com determinados parâmetros e aguarda o resultado
- [pg\_num\_rows()](function.pg-num-rows.md) - Retorna o número de linhas em um resultado

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
