# Move o ponteiro do resultado para um campo especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.field-seek.php

---

# mysqli\_result::field\_seek

# mysqli\_field\_seek

(PHP 5, PHP 7, PHP 8)

mysqli\_result::field\_seek -- mysqli\_field\_seek — Move o ponteiro do resultado para um campo especificado

### Descrição

Estilo orientado a objetos

public function **mysqli\_result::field\_seek**([int](language.types.integer.md) `$index`): [true](language.types.singleton.md)

Estilo procedural

function **mysqli\_field\_seek**([mysqli\_result](class.mysqli-result.md) `$result`, [int](language.types.integer.md) `$index`): [true](language.types.singleton.md)

Define o cursor de campo para o índice especificado. A próxima chamada a
[mysqli\_fetch\_field()](mysqli-result.fetch-field.md) retornará a definição de campo
da coluna associada com este índice.

> **Nota**:
>
> Para mover o ponteiro para o início de uma linha, passe um índice de valor zero.

### Parâmetros

`result`
:   Somente no estilo procedural: Um objeto [mysqli\_result](class.mysqli-result.md)
    retornado por [mysqli\_query()](mysqli.query.md), [mysqli\_store\_result()](mysqli.store-result.md),
    [mysqli\_use\_result()](mysqli.use-result.md) ou [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

`index`
:   O número do campo. Este valor precisa estar num intervalo de
    `0` a `número de campos - 1`.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função agora sempre retorna **`true`**. Anteriormente retornava **`false`** em caso de falha. |

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

    /* Obtém informação de campo para a 2ª coluna */
    $result->field_seek(1);
    $finfo = $result->fetch_field();

    printf("Name:     %s\n", $finfo->name);
    printf("Table:    %s\n", $finfo->table);
    printf("max. Len: %d\n", $finfo->max_length);
    printf("Flags:    %d\n", $finfo->flags);
    printf("Type:     %d\n\n", $finfo->type);

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

    /* Obtém informação de campo para a 2ª coluna */
    mysqli_field_seek($result, 1);
    $finfo = mysqli_fetch_field($result);

    printf("Name:     %s\n", $finfo->name);
    printf("Table:    %s\n", $finfo->table);
    printf("max. Len: %d\n", $finfo->max_length);
    printf("Flags:    %d\n", $finfo->flags);
    printf("Type:     %d\n\n", $finfo->type);

    mysqli_free_result($result);
}

/* fecha a conexão */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Name:     SurfaceArea
Table:    Country
max. Len: 10
Flags:    32769
Type:     4
```

### Veja também

- [mysqli\_fetch\_field()](mysqli-result.fetch-field.md) - Retorna o próximo campo no conjunto de resultados

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
