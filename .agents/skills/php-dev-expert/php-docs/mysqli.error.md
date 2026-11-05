# Retorna uma string descrevendo o último erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.error.php

---

# mysqli->error

# mysqli\_error

(PHP 5, PHP 7, PHP 8)

mysqli->error -- mysqli\_error — Retorna uma string descrevendo o último erro

### Descrição

Estilo orientado a objetos

[string](language.types.string.md) [$mysqli->error](mysqli.error.md);

Estilo procedural

function **mysqli\_error**([mysqli](class.mysqli.md) `$mysql`): [string](language.types.string.md)

Retorna a última mensagem de erro da chamada de função MySQLi mais recente
que possa ter sucesso ou falhar.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Uma string que descreve o erro. Uma string vazia se não houve erro.

### Examples

**Exemplo #1 Exemplo de $mysqli->error**

Estilo orientado a objetos

```
<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Conexão falhou: %s\n", $mysqli->connect_error);
    exit();
}

if (!$mysqli->query("SET a=1")) {
    printf("Error message: %s\n", $mysqli->error);
}

/* close connection */
$mysqli->close();
?>
```

Estilo procedural

```
<?php
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

if (!mysqli_query($link, "SET a=1")) {
    printf("Error message: %s\n", mysqli_error($link));
}

/* close connection */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Error message: Unknown system variable 'a'
```

### Veja também

- [mysqli\_connect\_errno()](mysqli.connect-errno.md) - Retorna o código de erro da última chamada de conexão
- [mysqli\_connect\_error()](mysqli.connect-error.md) - Retorna uma descrição do último erro de conexão
- [mysqli\_errno()](mysqli.errno.md) - Retorna o código de erro para a chamada de função mais recente
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
