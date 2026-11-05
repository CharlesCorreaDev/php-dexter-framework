# Retorna o código de erro para a chamada de função mais recente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.errno.php

---

# mysqli->errno

# mysqli\_errno

(PHP 5, PHP 7, PHP 8)

mysqli->errno -- mysqli\_errno — Retorna o código de erro para a chamada de função mais recente

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md) [$mysqli->errno](mysqli.errno.md);

Estilo procedural

function **mysqli\_errno**([mysqli](class.mysqli.md) `$mysql`): [int](language.types.integer.md)

Retorna o último código de erro para a chamada de função MySQLi mais recente que
pode ter sucesso ou falhar.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Um valor de código de erro para a última chamada, se ela falhou.
`0` significa que nenhum erro ocorreu.

### Examples

**Exemplo #1 Exemplo de $mysqli->errno**

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
    printf("Errorcode: %d\n", $mysqli->errno);
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
    printf("Errorcode: %d\n", mysqli_errno($link));
}

/* close connection */
mysqli_close($link);
?>
```

Os exemplos acima produzirão:

```
Errorcode: 1193
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
