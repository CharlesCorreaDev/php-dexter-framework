# Retorna uma string representando o tipo de conexão utilizada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.get-host-info.php

---

# mysqli::$host\_info

# mysqli\_get\_host\_info

(PHP 5, PHP 7, PHP 8)

mysqli::$host\_info -- mysqli\_get\_host\_info — Retorna uma string representando o tipo de conexão utilizada

### Descrição

Estilo orientado a objetos

[string](language.types.string.md) [$mysqli->host\_info](mysqli.get-host-info.md);

Estilo procedural

function **mysqli\_get\_host\_info**([mysqli](class.mysqli.md) `$mysql`): [string](language.types.string.md)

Retorna uma string descrevendo a conexão representada pelo
parâmetro `mysql` (incluindo
o nome de host servidor).

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Uma string de caracteres representando o nome de host do servidor e o tipo de conexão.

### Examples

**Exemplo #1 Exemplo de $mysqli->host\_info**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* mostra informação do host */
printf("Host info: %s\n", $mysqli->host_info);
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* mostra informação do host */
printf("Host info: %s\n", mysqli_get_host_info($link));
```

Os exemplos acima produzirão:

```
Host info: Localhost via UNIX socket
```

### Veja também

- [mysqli\_get\_proto\_info()](mysqli.get-proto-info.md) - Retorna a versão do protocolo MySQL usada

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
