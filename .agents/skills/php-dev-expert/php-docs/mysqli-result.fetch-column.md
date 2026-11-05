# Recebe uma única coluna da próxima linha de um resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.fetch-column.php

---

# mysqli\_result::fetch\_column

# mysqli\_fetch\_column

(PHP 8 >= 8.1.0)

mysqli\_result::fetch\_column -- mysqli\_fetch\_column — Recebe uma única coluna da próxima linha de um resultado

### Descrição

Estilo orientado a objetos

public function **mysqli\_result::fetch\_column**([int](language.types.integer.md) `$column` = 0): [null](language.types.null.md)|[int](language.types.integer.md)|[float](language.types.float.md)|[string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_fetch\_column**([mysqli\_result](class.mysqli-result.md) `$result`, [int](language.types.integer.md) `$column` = 0): [null](language.types.null.md)|[int](language.types.integer.md)|[float](language.types.float.md)|[string](language.types.string.md)|[false](language.types.singleton.md)

Recebe uma linha de dados do resultado e retorna a coluna indexada a partir de 0.
Cada chamada subsequente desta função retornará o valor da linha seguinte dentro
do conjunto de resultados, ou **`false`** se não houver mais linhas.

> **Nota**:
>
> Esta função define campos NULL como o
> valor **`null`** do PHP.

### Parâmetros

`result`
:   Somente no estilo procedural: Um objeto [mysqli\_result](class.mysqli-result.md)
    retornado por [mysqli\_query()](mysqli.query.md), [mysqli\_store\_result()](mysqli.store-result.md),
    [mysqli\_use\_result()](mysqli.use-result.md) ou [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

`column`
:   Número da coluna que se deseja receber da linha, sendo que a primeira é indexada em 0. Se
    nenhum valor for fornecido, a primeira coluna será retornada.

### Valor Retornado

Retorna uma única coluna da
próxima linha de um conjunto de resultados ou **`false`** se não houver mais linhas.

**Aviso**

Não há como retornar outra coluna da mesma linha se esta função
for usada para obter dados.

### Examples

**Exemplo #1 Exemplo de **mysqli\_result::fetch\_column()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$query = "SELECT CountryCode, Name FROM City ORDER BY ID DESC LIMIT 5";

$result = $mysqli->query($query);

/* recebe um único valor da segunda coluna */
while ($Name = $result->fetch_column(1)) {
    printf("%s\n", $Name);
}
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");

$query = "SELECT CountryCode, Name FROM City ORDER BY ID DESC LIMIT 5";

$result = mysqli_query($mysqli, $query);

/* recebe um único valor da segunda coluna */
while ($Name = mysqli_fetch_column($result, 1)) {
    printf("%s\n", $Name);
}
```

Os exemplos acima produzirão
algo semelhante a:

```
Rafah
Nablus
Jabaliya
Hebron
Khan Yunis
```

### Veja também

- [mysqli\_fetch\_all()](mysqli-result.fetch-all.md) - Recebe todas as linhas de resultado como array associativo, numérico, ou ambos
- [mysqli\_fetch\_array()](mysqli-result.fetch-array.md) - Recebe a próxima linha de resultado como array associativo, numérico, ou ambos
- [mysqli\_fetch\_assoc()](mysqli-result.fetch-assoc.md) - Obtém a próxima linha do conjunto de resultados como um array associativo
- [mysqli\_fetch\_object()](mysqli-result.fetch-object.md) - Recebe a próxima linha de um resultado como um objeto
- [mysqli\_fetch\_row()](mysqli-result.fetch-row.md) - Obtém a próxima linha de um resultado como um array enumerado
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
