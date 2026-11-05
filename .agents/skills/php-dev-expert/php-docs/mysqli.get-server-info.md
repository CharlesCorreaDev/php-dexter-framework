# Retorna a versão do servidor MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.get-server-info.php

---

# mysqli::$server\_info

# mysqli::get\_server\_info

# mysqli\_get\_server\_info

(PHP 5, PHP 7, PHP 8)

mysqli::$server\_info -- mysqli::get\_server\_info -- mysqli\_get\_server\_info — Retorna a versão do servidor MySQL

### Descrição

Estilo orientado a objetos

[string](language.types.string.md) [$mysqli->server\_info](mysqli.get-server-info.md);

public function **mysqli::get\_server\_info**(): [string](language.types.string.md)

Estilo procedural

function **mysqli\_get\_server\_info**([mysqli](class.mysqli.md) `$mysql`): [string](language.types.string.md)

Retorna uma string representando a versão do servidor MySQL ao qual a
extensão MySQLi está conectada.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Uma string de caracteres representando a versão do servidor.

### Examples

**Exemplo #1 Exemplo de $mysqli->server\_info**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password");

/* print server version */
printf("Server version: %s\n", $mysqli->server_info);
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password");

/* print server version */
printf("Server version: %s\n", mysqli_get_server_info($link));
```

Os exemplos acima produzirão
algo semelhante a:

```
Server version: 8.0.21
```

### Veja também

- [mysqli\_get\_client\_info()](mysqli.get-client-info.md) - Obtém informação do cliente MySQL
- [mysqli\_get\_client\_version()](mysqli.get-client-version.md) - Retorna a versão do cliente MySQL como um inteiro
- [mysqli\_get\_server\_version()](mysqli.get-server-version.md) - Retorna a versão do servidor MySQL como um inteiro

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
