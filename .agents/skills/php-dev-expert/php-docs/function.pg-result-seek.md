# Define deslocamento interno de linha na instância de resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-result-seek.php

---

# pg\_result\_seek

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

pg\_result\_seek — Define deslocamento interno de linha na instância de resultado

### Descrição

function **pg\_result\_seek**([PgSql\Result](class.pgsql-result.md) `$result`, [int](language.types.integer.md) `$row`): [bool](language.types.boolean.md)

**pg\_result\_seek()** define o deslocamento interno da linha na
instância do `result`.

### Parâmetros

`result`
:   Uma instância de [PgSql\Result](class.pgsql-result.md), retornada por [pg\_query()](function.pg-query.md),
    [pg\_query\_params()](function.pg-query-params.md) ou [pg\_execute()](function.pg-execute.md) (entre outras).

`row`
:   Linha para mover o deslocamento interno na instância [PgSql\Result](class.pgsql-result.md).
    As linhas são numeradas começando do zero.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_result\_seek()****

```
<?php

// Conecta ao banco de dados
$conn = pg_pconnect("dbname=publisher");

// Executa a consulta
$result = pg_query($conn, "SELECT author, email FROM authors");

// Busca a 3ª linha (assumindo que existem 3 linhas)
pg_result_seek($result, 2);

// Busca a 3ª linha
$row = pg_fetch_row($result);

?>
```

### Veja também

- [pg\_fetch\_row()](function.pg-fetch-row.md) - Obtém uma linha como um array enumerado
- [pg\_fetch\_assoc()](function.pg-fetch-assoc.md) - Busca uma linha como um array associativo
- [pg\_fetch\_array()](function.pg-fetch-array.md) - Busca uma linha como um array
- [pg\_fetch\_object()](function.pg-fetch-object.md) - Busca uma linha como um objeto
- [pg\_fetch\_result()](function.pg-fetch-result.md) - Retorna valores de uma instância de resultado

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
