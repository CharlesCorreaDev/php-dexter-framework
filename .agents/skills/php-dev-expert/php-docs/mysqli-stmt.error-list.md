# Retorna uma lista de erros da última instrução executada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.error-list.php

---

# mysqli\_stmt::$error\_list

# mysqli\_stmt\_error\_list

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

mysqli\_stmt::$error\_list -- mysqli\_stmt\_error\_list — Retorna uma lista de erros da última instrução executada

### Descrição

Estilo orientado a objetos

[array](language.types.array.md) [$mysqli\_stmt->error\_list](mysqli-stmt.error-list.md);

Estilo procedural

function **mysqli\_stmt\_error\_list**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [array](language.types.array.md)

Retorna um array de erros para a função de instrução mais recente
que possa ter sucesso ou falhar.

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

Uma lista de erros, cada um como um [array](language.types.array.md) associativo
contendo o número do erro (errno), o erro (error) e o estado SQL (sqlstate).

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

    echo "Erro:\n";
    print_r($stmt->error_list);

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

    echo "Erro:\n";
    print_r(mysqli_stmt_error_list($stmt));

    /* fecha a instrução */
    mysqli_stmt_close($stmt);
}

/* fecha a conexão */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Erro:
Array
(
    [0] => Array
        (
            [errno] => 1146
            [sqlstate] => 42S02
            [error] => Table 'world.myCountry' doesn't exist
        )

)
```

### Veja também

- [mysqli\_stmt\_error()](mysqli-stmt.error.md) - Retorna uma descrição em string para o último erro de instrução
- [mysqli\_stmt\_errno()](mysqli-stmt.errno.md) - Retorna o código de erro para a chamada de instrução mais recente
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
