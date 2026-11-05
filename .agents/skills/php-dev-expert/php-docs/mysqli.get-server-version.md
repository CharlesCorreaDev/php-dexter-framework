# Retorna a versão do servidor MySQL como um inteiro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.get-server-version.php

---

# mysqli::$server\_version

# mysqli\_get\_server\_version

(PHP 5, PHP 7, PHP 8)

mysqli::$server\_version -- mysqli\_get\_server\_version — Retorna a versão do servidor MySQL como um inteiro

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md) [$mysqli->server\_version](mysqli.get-server-version.md);

Estilo procedural

function **mysqli\_get\_server\_version**([mysqli](class.mysqli.md) `$mysql`): [int](language.types.integer.md)

A função **mysqli\_get\_server\_version()** retorna a
versão do servidor ao qual se está conectado (representado pelo
parâmetro `mysql`) como um inteiro.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Um inteiro representando a versão do servidor.

A forma deste número de versão é
`versão_principal * 10000 + versão_menor * 100 + sub_versão`
(ex. a versão 4.1.0 é 40100).

### Examples

**Exemplo #1 Exemplo de $mysqli->server\_version**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password");

/* print server version */
printf("Server version: %d\n", $mysqli->server_version);
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password");

/* print server version */
printf("Server version: %d\n", mysqli_get_server_version($link));
```

Os exemplos acima produzirão
algo semelhante a:

```
Server version: 80021
```

### Veja também

- [mysqli\_get\_client\_info()](mysqli.get-client-info.md) - Obtém informação do cliente MySQL
- [mysqli\_get\_client\_version()](mysqli.get-client-version.md) - Retorna a versão do cliente MySQL como um inteiro
- [mysqli\_get\_server\_info()](mysqli.get-server-info.md) - Retorna a versão do servidor MySQL

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
