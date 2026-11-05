# Obtém o deslocamento atual de campo de um ponteiro de resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.current-field.php

---

# mysqli\_result::$current\_field

# mysqli\_field\_tell

(PHP 5, PHP 7, PHP 8)

mysqli\_result::$current\_field -- mysqli\_field\_tell — Obtém o deslocamento atual de campo de um ponteiro de resultado

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md) [$mysqli\_result->current\_field](mysqli-result.current-field.md);

Estilo procedural

function **mysqli\_field\_tell**([mysqli\_result](class.mysqli-result.md) `$result`): [int](language.types.integer.md)

Retorna a posição do cursor de campo usado na última chamada a
[mysqli\_fetch\_field()](mysqli-result.fetch-field.md). Este valor pode ser
usado como um argumento para [mysqli\_field\_seek()](mysqli-result.field-seek.md).

### Parâmetros

`result`
:   Somente no estilo procedural: Um objeto [mysqli\_result](class.mysqli-result.md)
    retornado por [mysqli\_query()](mysqli.query.md), [mysqli\_store\_result()](mysqli.store-result.md),
    [mysqli\_use\_result()](mysqli.use-result.md) ou [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

### Valor Retornado

Retorna o deslocamento atual do cursor de campos.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* verifica a conexão */
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT Name, SurfaceArea from Country ORDER BY Code LIMIT 5";

if ($result = $mysqli->query($query)) {

    /* Obtém informação de campo para todas as colunas */
    while ($finfo = $result->fetch_field()) {

        /* obtém o deslocamento do ponteiro de campos */
        $currentfield = $result->current_field;

        printf("Column %d:\n", $currentfield);
        printf("Name:     %s\n", $finfo->name);
        printf("Table:    %s\n", $finfo->table);
        printf("max. Len: %d\n", $finfo->max_length);
        printf("Flags:    %d\n", $finfo->flags);
        printf("Type:     %d\n\n", $finfo->type);
    }
    $result->close();
}

/* fecha a conexão */
$mysqli->close();
?>
```

**Exemplo #2 Estilo procedural**

```
<?php
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* verifica a conexão */
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT Name, SurfaceArea from Country ORDER BY Code LIMIT 5";

if ($result = mysqli_query($link, $query)) {

    /* Obtém informação de campo para todas as colunas */
    while ($finfo = mysqli_fetch_field($result)) {

        /* obtém o deslocamento do ponteiro de campos */
        $currentfield = mysqli_field_tell($result);

        printf("Column %d:\n", $currentfield);
        printf("Name:     %s\n", $finfo->name);
        printf("Table:    %s\n", $finfo->table);
        printf("max. Len: %d\n", $finfo->max_length);
        printf("Flags:    %d\n", $finfo->flags);
        printf("Type:     %d\n\n", $finfo->type);
    }
    mysqli_free_result($result);
}

/* fecha a conexão */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Column 1:
Name:     Name
Table:    Country
max. Len: 11
Flags:    1
Type:     254

Column 2:
Name:     SurfaceArea
Table:    Country
max. Len: 10
Flags:    32769
Type:     4
```

### Veja também

- [mysqli\_fetch\_field()](mysqli-result.fetch-field.md) - Retorna o próximo campo no conjunto de resultados
- [mysqli\_field\_seek()](mysqli-result.field-seek.md) - Move o ponteiro do resultado para um campo especificado

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
