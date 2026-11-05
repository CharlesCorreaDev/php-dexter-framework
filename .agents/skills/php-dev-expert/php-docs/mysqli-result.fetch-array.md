# Recebe a próxima linha de resultado como array associativo, numérico, ou ambos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.fetch-array.php

---

# mysqli\_result::fetch\_array

# mysqli\_fetch\_array

(PHP 5, PHP 7, PHP 8)

mysqli\_result::fetch\_array -- mysqli\_fetch\_array — Recebe a próxima linha de resultado como array associativo, numérico, ou ambos

### Descrição

Estilo orientado a objetos

public function **mysqli\_result::fetch\_array**([int](language.types.integer.md) `$mode` = **`MYSQLI_BOTH`**): [array](language.types.array.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_fetch\_array**([mysqli\_result](class.mysqli-result.md) `$result`, [int](language.types.integer.md) `$mode` = **`MYSQLI_BOTH`**): [array](language.types.array.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

Recebe uma linha de dados do conjunto de resultados e retorna-a como um array.
Cada chamada subsequente a esta função retornará a linha seguinte dentro do
conjunto de resultados, ou **`null`** se não houver mais linhas.

Além de armazenar os dados nos índices numéricos do array resultante,
esta função também pode armazenar os dados em índices associativos
usando os nomes dos campos do conjunto de resultados como chaves.

Se duas ou mais colunas do resultado tiverem o mesmo nome, a última
coluna terá precedência e irá sobrescrever os dados anteriores. Para
acessar múltiplas colunas com o mesmo nome, deve ser usada a versão
da linha indexada numericamente.

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

`mode`
:   O segundo argumento é uma constante que indica qual tipo de array
    deve ser produzido a partir dos dados da linha atual. Os valores possíveis para
    este parâmetro são as constantes **`MYSQLI_ASSOC`**,
    **`MYSQLI_NUM`** ou **`MYSQLI_BOTH`**.

    Ao usar a constante **`MYSQLI_ASSOC`**, esta função
    irá se comportar de modo idêntico à função [mysqli\_fetch\_assoc()](mysqli-result.fetch-assoc.md),
    enquanto **`MYSQLI_NUM`** irá se comportar de modo idêntico à
    função [mysqli\_fetch\_row()](mysqli-result.fetch-row.md). A opção final
    **`MYSQLI_BOTH`** irá criar um único array com os
    atributos de ambas.

### Valor Retornado

Retorna um array que representa a linha recebida, **`null`** se não
houver mais linhas no resultado, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **mysqli\_result::fetch\_array()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER BY ID LIMIT 3";
$result = $mysqli->query($query);

/* array com índice numérico */
$row = $result->fetch_array(MYSQLI_NUM);
printf("%s (%s)\n", $row[0], $row[1]);

/* array associativo */
$row = $result->fetch_array(MYSQLI_ASSOC);
printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);

/* array com índice numérico e associativo */
$row = $result->fetch_array(MYSQLI_BOTH);
printf("%s (%s)\n", $row[0], $row["CountryCode"]);
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");

$query = "SELECT Name, CountryCode FROM City ORDER by ID LIMIT 3";
$result = mysqli_query($mysqli, $query);

/* array com índice numérico */
$row = mysqli_fetch_array($result, MYSQLI_NUM);
printf("%s (%s)\n", $row[0], $row[1]);

/* array associativo */
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);

/* array com índice numérico e associativo */
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
printf("%s (%s)\n", $row[0], $row["CountryCode"]);
```

Os exemplos acima produzirão
algo semelhante a:

```
Kabul (AFG)
Qandahar (AFG)
Herat (AFG)
```

### Veja também

- [mysqli\_fetch\_assoc()](mysqli-result.fetch-assoc.md) - Obtém a próxima linha do conjunto de resultados como um array associativo
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
