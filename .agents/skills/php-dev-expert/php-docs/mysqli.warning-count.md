# Retorna o número de alertas gerados pela consulta mais recente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.warning-count.php

---

# mysqli::$warning\_count

# mysqli\_warning\_count

(PHP 5, PHP 7, PHP 8)

mysqli::$warning\_count -- mysqli\_warning\_count — Retorna o número de alertas gerados pela consulta mais recente

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md) [$mysqli->warning\_count](mysqli.warning-count.md);

Estilo procedural

function **mysqli\_warning\_count**([mysqli](class.mysqli.md) `$mysql`): [int](language.types.integer.md)

Retorna o número de alertas gerados pela consulta mais recente.

> **Nota**:
>
> Para recuperar mensagens de alerta, o comando SQL a seguir pode ser usado:
> `SHOW WARNINGS [limit row_count]`.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Número de avisos ou zero se não houver avisos.

### Examples

**Exemplo #1 Exemplo de $mysqli->warning\_count**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

$mysqli->query("SELECT 42/0");

if ($mysqli->warning_count > 0) {
    $result = $mysqli->query("SHOW WARNINGS");
    $row = $result->fetch_row();
    printf("%s (%d): %s\n", $row[0], $row[1], $row[2]);
}
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

mysqli_query($link, "SELECT 42/0");

if (mysqli_warning_count($link) > 0) {
    $result = mysqli_query($link, "SHOW WARNINGS");
    $row = mysqli_fetch_row($result);
    printf("%s (%d): %s\n", $row[0], $row[1], $row[2]);
}
```

Os exemplos acima produzirão:

```
Warning (1365): Division by 0
```

### Veja também

- [mysqli\_errno()](mysqli.errno.md) - Retorna o código de erro para a chamada de função mais recente
- [mysqli\_error()](mysqli.error.md) - Retorna uma string descrevendo o último erro
- [mysqli\_sqlstate()](mysqli.sqlstate.md) - Retorna o erro SQLSTATE da operação MySQL anterior

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
