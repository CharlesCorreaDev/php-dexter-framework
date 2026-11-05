# Retorna o código de erro para a chamada de instrução mais recente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.errno.php

---

# mysqli\_stmt::$errno

# mysqli\_stmt\_errno

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::$errno -- mysqli\_stmt\_errno — Retorna o código de erro para a chamada de instrução mais recente

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md) [$mysqli\_stmt->errno](mysqli-stmt.errno.md);

Estilo procedural

function **mysqli\_stmt\_errno**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [int](language.types.integer.md)

Retorna o código de erro para a função de instrução mais recentemente chamada, que
possa ter sucesso ou falhar.

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

Um valor de código de erro. Zero significa que não houve erro.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php
/* Abre uma conexão */
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* Verifica a conexão */
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

$mysqli->query("CREATE TABLE myCountry LIKE Country");
$mysqli->query("INSERT INTO myCountry SELECT * FROM Country");

$query = "SELECT Name, Code FROM myCountry ORDER BY Name";
if ($stmt = $mysqli->prepare($query)) {

    /* apaga a tabela */
    $mysqli->query("DROP TABLE myCountry");

    /* executa a instrução */
    $stmt->execute();

    printf("Erro: %d.\n", $stmt->errno);

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
/* Abre uma conexão */
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* Verifica a conexão */
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

mysqli_query($link, "CREATE TABLE myCountry LIKE Country");
mysqli_query($link, "INSERT INTO myCountry SELECT * FROM Country");

$query = "SELECT Name, Code FROM myCountry ORDER BY Name";
if ($stmt = mysqli_prepare($link, $query)) {

    /* apaga a tabela */
    mysqli_query($link, "DROP TABLE myCountry");

    /* executa a instrução */
    mysqli_stmt_execute($stmt);

    printf("Erro: %d.\n", mysqli_stmt_errno($stmt));

    /* fecha a instrução */
    mysqli_stmt_close($stmt);
}

/* close connection */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Erro: 1146.
```

### Veja também

- [mysqli\_stmt\_error()](mysqli-stmt.error.md) - Retorna uma descrição em string para o último erro de instrução
- [mysqli\_stmt\_sqlstate()](mysqli-stmt.sqlstate.md) - Retorna o erro SQLSTATE da operação da instrução anterior

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
