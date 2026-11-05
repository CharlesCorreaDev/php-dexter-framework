# Libera memória de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-free-result.php

---

# pg\_free\_result

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_free\_result — Libera memória de resultados

### Descrição

function **pg\_free\_result**([PgSql\Result](class.pgsql-result.md) `$result`): [bool](language.types.boolean.md)

**pg\_free\_result()** libera a memória e os dados associados à instância
[PgSql\Result](class.pgsql-result.md) especificada.

Esta função só precisa ser chamada se o consumo de memória
durante a execução do script for um problema. Caso contrário, toda a memória de resultados
será liberada automaticamente quando o script terminar.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_freeresult()**.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_free\_result()****

```
<?php
$db = pg_connect("dbname=users user=me");

$res = pg_query($db, "SELECT 1 UNION ALL SELECT 2");

$val = pg_fetch_result($res, 1, 0);

echo "O primeiro campo da segunda linha é: ", $val, "\n";

pg_free_result($res);
?>
```

O exemplo acima produzirá:

```
O primeiro campo da segunda linha é: 2
```

### Veja também

- [pg\_query()](function.pg-query.md) - Executa uma consulta
- [pg\_query\_params()](function.pg-query-params.md) - Envia um comando ao servidor e aguarda o resultado, com a capacidade de passar parâmetros separadamente do texto do comando SQL
- [pg\_execute()](function.pg-execute.md) - Envia uma solicitação para executar uma instrução preparada com determinados parâmetros e aguarda o resultado
- [pg\_result\_memory\_size()](function.pg-result-memory-size.md) - Retorna a quantidade de memória alocada para um resultado de consulta

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
