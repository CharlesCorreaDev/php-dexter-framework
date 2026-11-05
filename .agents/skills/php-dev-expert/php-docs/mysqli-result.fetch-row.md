# Obtém a próxima linha de um resultado como um array enumerado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.fetch-row.php

---

# mysqli\_result::fetch\_row

# mysqli\_fetch\_row

(PHP 5, PHP 7, PHP 8)

mysqli\_result::fetch\_row -- mysqli\_fetch\_row — Obtém a próxima linha de um resultado como um array enumerado

### Descrição

Estilo orientado a objetos

public function **mysqli\_result::fetch\_row**(): [array](language.types.array.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_fetch\_row**([mysqli\_result](class.mysqli-result.md) `$result`): [array](language.types.array.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

Obtém uma linha de dados do conjunto de resultado e retorna-o como um array
enumerado, onde cada coluna é armazenada em um deslocamento do array iniciando de 0 (zero).
Cada chamada subsequente a esta função retornará a próxima linha no conjunto de
resultados, ou **`null`** se não houver mais linhas.

> **Nota**:
>
> Esta função define campos NULL como o
> valor **`null`** do PHP.

### Parâmetros

`result`
:   Somente no estilo procedural: Um objeto [mysqli\_result](class.mysqli-result.md)
    retornado por [mysqli\_query()](mysqli.query.md), [mysqli\_store\_result()](mysqli.store-result.md),
    [mysqli\_use\_result()](mysqli.use-result.md) ou [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

### Valor Retornado

Retorna um array representando a linha obtida, **`null`** se não
houver mais linhas no conjunto de resultados, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **mysqli\_result::fetch\_row()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER BY ID DESC";

$result = $mysqli->query($query);

/* obtém array de objetos */
while ($row = $result->fetch_row()) {
    printf("%s (%s)\n", $row[0], $row[1]);
}
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER BY ID DESC";

$result = mysqli_query($mysqli, $query);

/* obtém array de objetos */
while ($row = mysqli_fetch_row($result)) {
    printf("%s (%s)\n", $row[0], $row[1]);
}
```

Os exemplos acima produzirão
algo semelhante a:

```
Pueblo (USA)
Arvada (USA)
Cape Coral (USA)
Green Bay (USA)
Santa Clara (USA)
```

### Veja também

- [mysqli\_fetch\_array()](mysqli-result.fetch-array.md) - Recebe a próxima linha de resultado como array associativo, numérico, ou ambos
- [mysqli\_fetch\_assoc()](mysqli-result.fetch-assoc.md) - Obtém a próxima linha do conjunto de resultados como um array associativo
- [mysqli\_fetch\_column()](mysqli-result.fetch-column.md) - Recebe uma única coluna da próxima linha de um resultado
- [mysqli\_fetch\_object()](mysqli-result.fetch-object.md) - Recebe a próxima linha de um resultado como um objeto
- [mysqli\_query()](mysqli.query.md) - Executa uma consulta no banco de dados
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
