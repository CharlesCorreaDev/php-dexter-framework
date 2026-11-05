# Obtém a próxima linha do conjunto de resultados como um array associativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.fetch-assoc.php

---

# mysqli\_result::fetch\_assoc

# mysqli\_fetch\_assoc

(PHP 5, PHP 7, PHP 8)

mysqli\_result::fetch\_assoc -- mysqli\_fetch\_assoc — Obtém a próxima linha do conjunto de resultados como um array associativo

### Descrição

Estilo orientado a objetos

public function **mysqli\_result::fetch\_assoc**(): [array](language.types.array.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_fetch\_assoc**([mysqli\_result](class.mysqli-result.md) `$result`): [array](language.types.array.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

Obtém uma linha de dados do conjunto de resultados e retorna-o como um array
associativo.
Cada chamada subsequente desta função retornará a linha seguinte do
conjunto de resultados, ou **`null`** se não houver mais linhas.

Se duas ou mais colunas do resultado tiverem o mesmo nome, a última
coluna terá precedência e irá sobrescrever qualquer dado anterior. Para
acessar múltiplas colunas com o mesmo nome,
[mysqli\_fetch\_row()](mysqli-result.fetch-row.md) pode ser usada para obter o array indexado
numericamente, ou apelidos podem ser usados na lista de seleção da consulta SQL para dar
nomes diferentes às colunas.

> **Nota**:
>
> Os nomes de campos retornados por esta função
> *diferenciam maiúsculas e minúsculas*.

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

Retorna um array associativo que representa a linha obtida,
onde cada chave no array representa o nome de uma das colunas do conjunto
de resultados; **`null`** se não houver
mais linhas no conjunto de resultados, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **mysqli\_result::fetch\_assoc()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER BY ID DESC";

$result = $mysqli->query($query);

/* obtém o array associativo */
while ($row = $result->fetch_assoc()) {
    printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
}
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER BY ID DESC";

$result = mysqli_query($mysqli, $query);

/* obtém o array associativo */
while ($row = mysqli_fetch_assoc($result)) {
    printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
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

**Exemplo #2 Comparação de [mysqli\_result](class.mysqli-result.md) [iterator](class.iterator.md) e uso de **mysqli\_result::fetch\_assoc()****

[mysqli\_result](class.mysqli-result.md) pode ser iterada usando-se [`foreach`](control-structures.foreach.md).
O conjunto de resultados será iterado sempre a partir da primeira linha, independente da posição atual do ponteiro.

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$query = 'SELECT Name, CountryCode FROM City ORDER BY ID DESC';

// Usando iterardores
$result = $mysqli->query($query);
foreach ($result as $row) {
    printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
}

echo "\n==================\n";

// Não usando iteradores
$result = $mysqli->query($query);
while ($row = $result->fetch_assoc()) {
    printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
}
```

O exemplo acima produzirá
algo semelhante a:

```
Pueblo (USA)
Arvada (USA)
Cape Coral (USA)
Green Bay (USA)
Santa Clara (USA)

==================
Pueblo (USA)
Arvada (USA)
Cape Coral (USA)
Green Bay (USA)
Santa Clara (USA)
```

### Veja também

- [mysqli\_fetch\_array()](mysqli-result.fetch-array.md) - Recebe a próxima linha de resultado como array associativo, numérico, ou ambos
- [mysqli\_fetch\_column()](mysqli-result.fetch-column.md) - Recebe uma única coluna da próxima linha de um resultado
- [mysqli\_fetch\_row()](mysqli-result.fetch-row.md) - Obtém a próxima linha de um resultado como um array enumerado
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
