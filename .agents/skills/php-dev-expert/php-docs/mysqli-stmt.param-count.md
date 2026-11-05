# Retorna o número de parâmetros para uma instrução fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.param-count.php

---

# mysqli\_stmt::$param\_count

# mysqli\_stmt\_param\_count

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::$param\_count -- mysqli\_stmt\_param\_count — Retorna o número de parâmetros para uma instrução fornecida

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md) [$mysqli\_stmt->param\_count](mysqli-stmt.param-count.md);

Estilo procedural

function **mysqli\_stmt\_param\_count**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [int](language.types.integer.md)

Retorna o número de marcadores de parâmetros presentes na instrução preparada.

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

Retorna um inteiro que representa o número de parâmetros.

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

if ($stmt = $mysqli->prepare("SELECT Name FROM Country WHERE Name=? OR Code=?")) {

    $marker = $stmt->param_count;
    printf("Instrução tem %d marcadores.\n", $marker);

    /* fecha a instrução */
    $stmt->close();
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

if ($stmt = mysqli_prepare($link, "SELECT Name FROM Country WHERE Name=? OR Code=?")) {

    $marker = mysqli_stmt_param_count($stmt);
    printf("Instrução tem %d marcadores.\n", $marker);

    /* fecha a instrução */
    mysqli_stmt_close($stmt);
}

/* fecha a conexão */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Instrução tem 2 marcadores.
```

### Veja também

- [mysqli\_prepare()](mysqli.prepare.md) - Prepara uma instrução SQL para execução

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
