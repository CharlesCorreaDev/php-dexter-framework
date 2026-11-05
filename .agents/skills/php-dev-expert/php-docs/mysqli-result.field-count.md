# Obtém o número de campos no conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.field-count.php

---

# mysqli\_result::$field\_count

# mysqli\_num\_fields

(PHP 5, PHP 7, PHP 8)

mysqli\_result::$field\_count -- mysqli\_num\_fields — Obtém o número de campos no conjunto de resultados

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md) [$mysqli\_result->field\_count](mysqli-result.field-count.md);

Estilo procedural

function **mysqli\_num\_fields**([mysqli\_result](class.mysqli-result.md) `$result`): [int](language.types.integer.md)

Obtém o número de campos no conjunto de resultados.

### Parâmetros

`result`
:   Somente no estilo procedural: Um objeto [mysqli\_result](class.mysqli-result.md)
    retornado por [mysqli\_query()](mysqli.query.md), [mysqli\_store\_result()](mysqli.store-result.md),
    [mysqli\_use\_result()](mysqli.use-result.md) ou [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

### Valor Retornado

Um valor do tipo [int](language.types.integer.md) que representa o número de campos.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$result = $mysqli->query("SELECT Name, CountryCode, District, Population FROM City ORDER BY ID LIMIT 1");

/* Obtém o número de campos do resultado */
$field_cnt = $result->field_count;

printf("O conjunto de resultados tem %d campos.\n", $field_cnt);
```

**Exemplo #2 Estilo procedural**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

$result = mysqli_query($link, "SELECT Name, CountryCode, District, Population FROM City ORDER BY ID LIMIT 1");

/* Obtém o número de campos do resultado */
$field_cnt = mysqli_num_fields($result);

printf("O conjunto de resultados tem %d campos.\n", $field_cnt);
```

Os exemplos acima produzirão:

```
O conjunto de resultados tem 4 campos.
```

### Veja também

- [mysqli\_fetch\_field()](mysqli-result.fetch-field.md) - Retorna o próximo campo no conjunto de resultados

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
