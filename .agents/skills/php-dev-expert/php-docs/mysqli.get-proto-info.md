# Retorna a versão do protocolo MySQL usada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.get-proto-info.php

---

# mysqli::$protocol\_version

# mysqli\_get\_proto\_info

(PHP 5, PHP 7, PHP 8)

mysqli::$protocol\_version -- mysqli\_get\_proto\_info — Retorna a versão do protocolo MySQL usada

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md) [$mysqli->protocol\_version](mysqli.get-proto-info.md);

Estilo procedural

function **mysqli\_get\_proto\_info**([mysqli](class.mysqli.md) `$mysql`): [int](language.types.integer.md)

Retorna um inteiro representando a versão do protocolo MySQL usada pela
conexão representada pelo parâmetro `mysql`.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Retorna um inteiro representando a versão do protocolo.

### Examples

**Exemplo #1 Exemplo de $mysqli->protocol\_version**

Estilo orientado a objetos

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "my_user", "my_password");

/* mostra a versão do protocolo */
printf("Versão do protocolo: %d\n", $mysqli->protocol_version);
```

Estilo procedural

```
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "my_user", "my_password");

/* mostra a versão do protocolo */
printf("Versão do protocolo: %d\n", mysqli_get_proto_info($link));
```

Os exemplos acima produzirão:

```
Versão do protocolo: 10
```

### Veja também

- [mysqli\_get\_host\_info()](mysqli.get-host-info.md) - Retorna uma string representando o tipo de conexão utilizada

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
