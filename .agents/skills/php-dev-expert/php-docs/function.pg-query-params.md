# Envia um comando ao servidor e aguarda o resultado, com a capacidade de passar parâmetros separadamente do texto do comando SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-query-params.php

---

# pg\_query\_params

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

pg\_query\_params — Envia um comando ao servidor e aguarda o resultado, com a capacidade de passar parâmetros separadamente do texto do comando SQL

### Descrição

function **pg\_query\_params**([PgSql\Connection](class.pgsql-connection.md) `$connection` = ?, [string](language.types.string.md) `$query`, [array](language.types.array.md) `$params`): [PgSql\Result](class.pgsql-result.md)|[false](language.types.singleton.md)

Envia um comando ao servidor e aguarda o resultado, podendo passar parâmetros
separadamente do texto do comando SQL.

**pg\_query\_params()** é como [pg\_query()](function.pg-query.md),
mas oferece funcionalidade adicional: os valores dos parâmetros
podem ser especificados separadamente da string de comando propriamente dita.

Se parâmetros forem usados, eles serão referidos na string
`query` como $1, $2, etc. O mesmo parâmetro pode
aparecer mais de uma vez na `query`; o mesmo valor
será usado nesse caso. `params` especifica os
valores reais dos parâmetros. Um valor **`null`** neste array significa que o
parâmetro correspondente é SQL `NULL`.

A principal vantagem de **pg\_query\_params()** sobre [pg\_query()](function.pg-query.md)
é que os valores dos parâmetros
podem ser separados da string `query`, evitando assim a necessidade de tarefas tediosas
e propensas a erros de escape. Ao contrário de [pg\_query()](function.pg-query.md),
**pg\_query\_params()** permite no
máximo um comando SQL na string fornecida. (Pode haver ponto-e-vírgula,
mas não mais do que um comando não vazio.)

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` não for especificado, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`query`
:   A instrução SQL parametrizada. Deve conter apenas uma única instrução.
    (múltiplas instruções separadas por ponto e vírgula não são permitidas.) Se algum parâmetro
    for usado, ele será chamado de $1, $2, etc.

    Os valores fornecidos pelo usuário devem sempre ser passados como parâmetros, não
    interpolados na string de consulta, onde formam possíveis vetores de ataque de
     [injeção de SQL](security.database.sql-injection.md)
    e introduzem bugs ao manipular dados contendo aspas.
    Se por algum motivo você não puder usar um parâmetro, certifique-se de que os
    valores interpolados foram [escapados corretamente](function.pg-escape-string.md).

`params`
:   Um array de valores de parâmetros para substituir os espaços reservados $1, $2, etc.
    na string de consult original preparada. O número de elementos no array
    deve corresponder ao número de espaços reservados.

    Valores destinados a campos `bytea` não são suportados como
    parâmetros. Use [pg\_escape\_bytea()](function.pg-escape-bytea.md) ou use as funções de
    objetos grandes.

### Valor Retornado

Uma instância [PgSql\Result](class.pgsql-result.md) em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Agora retorna uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Usando **pg\_query\_params()****

```
<?php
// Conecta a um banco de dados chamado "mary"
$dbconn = pg_connect("dbname=mary");

// Encontre todas as lojas chamadas Joe's Widgets. Observe que não é necessário
// escapar "Joe's Widgets"
$result = pg_query_params($dbconn, 'SELECT * FROM shops WHERE name = $1', array("Joe's Widgets"));

// Compara com apenas o uso de pg_query
$str = pg_escape_string("Joe's Widgets");
$result = pg_query($dbconn, "SELECT * FROM shops WHERE name = '{$str}'");

?>
```

### Veja também

- [pg\_query()](function.pg-query.md) - Executa uma consulta

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
