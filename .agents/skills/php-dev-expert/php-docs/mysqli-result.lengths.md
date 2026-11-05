# Retorna os comprimentos das colunas da linha atual do resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.lengths.php

---

# mysqli\_result::$lengths

# mysqli\_fetch\_lengths

(PHP 5, PHP 7, PHP 8)

mysqli\_result::$lengths -- mysqli\_fetch\_lengths — Retorna os comprimentos das colunas da linha atual do resultado

### Descrição

Estilo orientado a objetos

?[array](language.types.array.md) [$mysqli\_result->lengths](mysqli-result.lengths.md);

Estilo procedural

function **mysqli\_fetch\_lengths**([mysqli\_result](class.mysqli-result.md) `$result`): [array](language.types.array.md)|[false](language.types.singleton.md)

A função **mysqli\_fetch\_lengths()** retorna um array
que contém os comprimentos de cada coluna da linha atual dentro do
conjunto de resultados.

### Parâmetros

`result`
:   Somente no estilo procedural: Um objeto [mysqli\_result](class.mysqli-result.md)
    retornado por [mysqli\_query()](mysqli.query.md), [mysqli\_store\_result()](mysqli.store-result.md),
    [mysqli\_use\_result()](mysqli.use-result.md) ou [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

### Valor Retornado

Um array de números inteiros que representam o tamanho de cada coluna (não incluindo
caracteres nulos de terminação). **`false`** se ocorrer um erro.

**mysqli\_fetch\_lengths()** é válida apenas para a linha atual
do resultado. Retorna **`false`** se for chamada antes de se chamar
mysqli\_fetch\_row, mysqli\_fetch\_array, mysqli\_fetch\_object ou após ter recebido todas as linhas do resultado.

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

$query = "SELECT * from Country ORDER BY Code LIMIT 1";

if ($result = $mysqli->query($query)) {

    $row = $result->fetch_row();

    /* mostra os comprimentos das colunas */
    foreach ($result->lengths as $i => $val) {
        printf("Campo %2d tem comprimento %2d\n", $i+1, $val);
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

$query = "SELECT * from Country ORDER BY Code LIMIT 1";

if ($result = mysqli_query($link, $query)) {

    $row = mysqli_fetch_row($result);

    /* mostra os comprimentos das colunas */
    foreach (mysqli_fetch_lengths($result) as $i => $val) {
        printf("Campo %2d tem comprimento %2d\n", $i+1, $val);
    }
    mysqli_free_result($result);
}

/* fecha a conexão */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Campo  1 tem comprimento  3
Campo  2 tem comprimento  5
Campo  3 tem comprimento 13
Campo  4 tem comprimento  9
Campo  5 tem comprimento  6
Campo  6 tem comprimento  1
Campo  7 tem comprimento  6
Campo  8 tem comprimento  4
Campo  9 tem comprimento  6
Campo 10 tem comprimento  6
Campo 11 tem comprimento  5
Campo 12 tem comprimento 44
Campo 13 tem comprimento  7
Campo 14 tem comprimento  3
Campo 15 tem comprimento  2
```

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
