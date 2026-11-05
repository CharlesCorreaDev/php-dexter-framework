# Retorna o número de colunas na instrução informada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.field-count.php

---

# mysqli\_stmt::$field\_count

# mysqli\_stmt\_field\_count

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::$field\_count -- mysqli\_stmt\_field\_count — Retorna o número de colunas na instrução informada

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md) [$mysqli\_stmt->field\_count](mysqli-stmt.field-count.md);

Estilo procedural

function **mysqli\_stmt\_field\_count**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [int](language.types.integer.md)

Retorna o número de colunas na instrução preparada.

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

Retorna um inteiro que representa o número de colunas.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$code = 'FR';

$stmt = $mysqli->prepare("SELECT Name FROM Country WHERE Code=?");
$stmt->bind_param('s', $code);
$stmt->execute();
$row = $stmt->get_result()->fetch_row();
for ($i = 0; $i < $stmt->field_count; $i++) {
    printf("Valor da coluna número %d é %s", $i, $row[$i]);
}
```

**Exemplo #2 Estilo procedural**

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "my_user", "my_password", "world");

$code = 'FR';

$stmt = mysqli_prepare($mysqli, "SELECT Name FROM Country WHERE Code=?");
mysqli_stmt_bind_param($stmt, 's', $code);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_row($result);
for ($i = 0; $i < mysqli_stmt_field_count($stmt); $i++) {
    printf("Valor da coluna número %d é %s", $i, $row[$i]);
}
```

Os exemplos acima produzirão
algo semelhante a:

```
Valor da coluna número 0 é France
```

### Veja também

- [mysqli\_stmt\_num\_rows()](mysqli-stmt.num-rows.md) - Retorna o número de linhas recebidas pelo servidor

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
