# Recebe todas as linhas de resultado como array associativo, numérico, ou ambos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.fetch-all.php

---

# mysqli\_result::fetch\_all

# mysqli\_fetch\_all

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

mysqli\_result::fetch\_all -- mysqli\_fetch\_all — Recebe todas as linhas de resultado como array associativo, numérico, ou ambos

### Descrição

Estilo orientado a objetos

public function **mysqli\_result::fetch\_all**([int](language.types.integer.md) `$mode` = **`MYSQLI_NUM`**): [array](language.types.array.md)

Estilo procedural

function **mysqli\_fetch\_all**([mysqli\_result](class.mysqli-result.md) `$result`, [int](language.types.integer.md) `$mode` = **`MYSQLI_NUM`**): [array](language.types.array.md)

Retorna um array bidimensional com todas as linhas do resultado
como um array associativo, numérico, ou ambos.

> **Nota**:
>
> Antes do PHP 8.1.0, disponível somente com
> [mysqlnd](book.mysqlnd.md).

### Parâmetros

`result`
:   Somente no estilo procedural: Um objeto [mysqli\_result](class.mysqli-result.md)
    retornado por [mysqli\_query()](mysqli.query.md), [mysqli\_store\_result()](mysqli.store-result.md),
    [mysqli\_use\_result()](mysqli.use-result.md) ou [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

`mode`
:   Este parâmetro opcional é uma constante que indica que tipo de array
    deve ser produzido a partir dos dados da linha atual. Os valores possíveis para
    este parâmetro são as constantes **`MYSQLI_ASSOC`**,
    **`MYSQLI_NUM`** ou **`MYSQLI_BOTH`**.

### Valor Retornado

Retorna um array de arrays associativos ou numéricos com as linhas do resultado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Agora também disponível com a biblioteca libmysqlclient. |

### Examples

**Exemplo #1 Exemplo de **mysqli\_result::fetch\_all()****

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$result = $mysqli->query("SELECT Name, CountryCode FROM City ORDER BY ID LIMIT 3");

$rows = $result->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {
    printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
}
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");

$result = mysqli_query($mysqli, "SELECT Name, CountryCode FROM City ORDER BY ID LIMIT 3");

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach ($rows as $row) {
    printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
}
```

Os exemplos acima produzirão:

```
Kabul (AFG)
Qandahar (AFG)
Herat (AFG)
```

### Veja também

- [mysqli\_fetch\_array()](mysqli-result.fetch-array.md) - Recebe a próxima linha de resultado como array associativo, numérico, ou ambos
- [mysqli\_fetch\_column()](mysqli-result.fetch-column.md) - Recebe uma única coluna da próxima linha de um resultado
- [mysqli\_query()](mysqli.query.md) - Executa uma consulta no banco de dados

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
