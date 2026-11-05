# Ajusta o ponteiro do resultado para uma linha arbitrária no resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.data-seek.php

---

# mysqli\_result::data\_seek

# mysqli\_data\_seek

(PHP 5, PHP 7, PHP 8)

mysqli\_result::data\_seek -- mysqli\_data\_seek — Ajusta o ponteiro do resultado para uma linha arbitrária no resultado

### Descrição

Estilo orientado a objetos

public function **mysqli\_result::data\_seek**([int](language.types.integer.md) `$offset`): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_data\_seek**([mysqli\_result](class.mysqli-result.md) `$result`, [int](language.types.integer.md) `$offset`): [bool](language.types.boolean.md)

A função **mysqli\_data\_seek()** move o ponteiro para uma
posição arbritrária especificada pelo parâmetro `offset` no
conjunto de resultados.

### Parâmetros

`result`
:   Somente no estilo procedural: Um objeto [mysqli\_result](class.mysqli-result.md)
    retornado por [mysqli\_query()](mysqli.query.md), [mysqli\_store\_result()](mysqli.store-result.md),
    [mysqli\_use\_result()](mysqli.use-result.md) ou [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

`offset`
:   O deslocamento de linha. deve estar entre zero e o número total de linhas
    menos uma (0..[mysqli\_num\_rows()](mysqli-result.num-rows.md) - 1).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **mysqli::data\_seek()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER BY Name";
$result = $mysqli->query($query);

/* Vai até a linha 401 */
$result->data_seek(400);

/* Recebe uma única linha */
$row = $result->fetch_row();

printf("Cidade: %s  Código do país: %s\n", $row[0], $row[1]);
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER BY Name";

$result = mysqli_query($link, $query);

/* Vai até a linha 401 */
mysqli_data_seek($result, 400);

/* Recebe uma única linha */
$row = mysqli_fetch_row($result);

printf ("Cidade: %s  Código do país: %s\n", $row[0], $row[1]);
```

Os exemplos acima produzirão:

```
Cidade: Benin City  Código do país: NGA
```

**Exemplo #2 Ajustando o ponteiro de resultado na iteração**

Esta função pode ser útil quando iterar sobre o conjunto de resultados para impor
uma ordem customizada ou para retroceder o conjunto de resultados ao iterar múltiplas vezes.

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER BY Name LIMIT 15,4";
$result = $mysqli->query($query);

/* Itera o conjunto de resultados na ordem inversa */
for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) {
    $result->data_seek($row_no);

    /* Recebe uma linha */
    $row = $result->fetch_row();

    printf("Cidade: %s  Código do país: %s\n", $row[0], $row[1]);
}

/* Redefine o ponteiro para o início do conjunto de resultados */
$result->data_seek(0);

print "\n";

/* Itera o mesmo conjunto novamente */
while ($row = $result->fetch_row()) {
    printf("Cidade: %s  Código do país: %s\n", $row[0], $row[1]);
}
```

Os exemplos acima produzirão:

```
Cidade: Acmbaro  Código do país: MEX
Cidade: Abuja  Código do país: NGA
Cidade: Abu Dhabi  Código do país: ARE
Cidade: Abottabad  Código do país: PAK

Cidade: Abottabad  Código do país: PAK
Cidade: Abu Dhabi  Código do país: ARE
Cidade: Abuja  Código do país: NGA
Cidade: Acmbaro  Código do país: MEX
```

### Notas

> **Nota**:
>
> Esta função somente pode ser usada com resultados em buffer obtidos do
> uso das funções [mysqli\_store\_result()](mysqli.store-result.md),
> [mysqli\_query()](mysqli.query.md) ou [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

### Veja também

- [mysqli\_store\_result()](mysqli.store-result.md) - Transfere um conjunto de resultados da última consulta
- [mysqli\_fetch\_row()](mysqli-result.fetch-row.md) - Obtém a próxima linha de um resultado como um array enumerado
- [mysqli\_fetch\_array()](mysqli-result.fetch-array.md) - Recebe a próxima linha de resultado como array associativo, numérico, ou ambos
- [mysqli\_fetch\_assoc()](mysqli-result.fetch-assoc.md) - Obtém a próxima linha do conjunto de resultados como um array associativo
- [mysqli\_fetch\_object()](mysqli-result.fetch-object.md) - Recebe a próxima linha de um resultado como um objeto
- [mysqli\_query()](mysqli.query.md) - Executa uma consulta no banco de dados
- [mysqli\_num\_rows()](mysqli-result.num-rows.md) - Obtém o número de linhas no resultado

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
