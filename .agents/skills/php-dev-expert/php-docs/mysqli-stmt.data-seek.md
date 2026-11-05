# Ajusta o ponteiro de resultado para uma linha arbitrária no resultado com buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.data-seek.php

---

# mysqli\_stmt::data\_seek

# mysqli\_stmt\_data\_seek

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::data\_seek -- mysqli\_stmt\_data\_seek — Ajusta o ponteiro de resultado para uma linha arbitrária no resultado com buffer

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::data\_seek**([int](language.types.integer.md) `$offset`): [void](language.types.void.md)

Estilo procedural

function **mysqli\_stmt\_data\_seek**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`, [int](language.types.integer.md) `$offset`): [void](language.types.void.md)

Esta função move o ponteiro do conjunto de resultados com buffer para
uma linha arbitrária especificada pelo parâmetro `offset`.

Esta função funciona somente com o conjunto de resultados interno com buffer.
[mysqli\_stmt\_store\_result()](mysqli-stmt.store-result.md) precisa ser chamada antes de
**mysqli\_stmt\_data\_seek()**.

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

`offset`
:   Precisa ser entre zero e o número total de linhas menos um (0..
    [mysqli\_stmt\_num\_rows()](mysqli-stmt.num-rows.md) - 1).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER BY Name";
$stmt = $mysqli->prepare($query);
$stmt->execute();

$stmt->bind_result($name, $code);

$stmt->store_result();

/* aponta para a linha núm. 400 */
$stmt->data_seek(399);

$stmt->fetch();

printf("City: %s  Countrycode: %s\n", $name, $code);
```

**Exemplo #2 Estilo procedural**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER BY Name";
$stmt = mysqli_prepare($link, $query);

mysqli_stmt_execute($stmt);

mysqli_stmt_bind_result($stmt, $name, $code);

mysqli_stmt_store_result($stmt);

/* aponta para a linha núm. 400 */
mysqli_stmt_data_seek($stmt, 399);

mysqli_stmt_fetch($stmt);

printf("City: %s  Countrycode: %s\n", $name, $code);
```

Os exemplos acima produzirão:

```
City: Benin City  Countrycode: NGA
```

### Veja também

- [mysqli\_prepare()](mysqli.prepare.md) - Prepara uma instrução SQL para execução
- [mysqli\_stmt\_store\_result()](mysqli-stmt.store-result.md) - Armazena um conjunto de resultados em um buffer interno
- [mysqli\_stmt\_num\_rows()](mysqli-stmt.num-rows.md) - Retorna o número de linhas recebidas pelo servidor
- [mysqli\_data\_seek()](mysqli-result.data-seek.md) - Ajusta o ponteiro do resultado para uma linha arbitrária no resultado

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
