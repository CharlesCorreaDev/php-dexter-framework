# Retorna uma lista de erros do último comando executado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.error-list.php

---

# mysqli::$error\_list

# mysqli\_error\_list

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

mysqli::$error\_list -- mysqli\_error\_list — Retorna uma lista de erros do último comando executado

### Descrição

Estilo orientado a objetos

[array](language.types.array.md) [$mysqli->error\_list](mysqli.error-list.md);

Estilo procedural

function **mysqli\_error\_list**([mysqli](class.mysqli.md) `$mysql`): [array](language.types.array.md)

Retorna um array de erros para a chamada de função MySQLi mais recente
que pode ser bem-sucedida ou falhar.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Uma lista de erros, cada um como um [array](language.types.array.md) associativo
contendo errno, error e sqlstate.

### Examples

**Exemplo #1 Exemplo de $mysqli->error\_list**

Estilo orientado a objetos

```
<?php
$mysqli = new mysqli("localhost", "nobody", "");

/* verifica a conexão */
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

if (!$mysqli->query("SET a=1")) {
    print_r($mysqli->error_list);
}

/* fecha a conexão */
$mysqli->close();
?>
```

Estilo procedural

```
<?php
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* verifica a conexão */
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

if (!mysqli_query($link, "SET a=1")) {
    print_r(mysqli_error_list($link));
}

/* fecha a conexão */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Array
(
    [0] => Array
        (
            [errno] => 1193
            [sqlstate] => HY000
            [error] => Unknown system variable 'a'
        )

)
```

### Veja também

- [mysqli\_connect\_errno()](mysqli.connect-errno.md) - Retorna o código de erro da última chamada de conexão
- [mysqli\_connect\_error()](mysqli.connect-error.md) - Retorna uma descrição do último erro de conexão
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
