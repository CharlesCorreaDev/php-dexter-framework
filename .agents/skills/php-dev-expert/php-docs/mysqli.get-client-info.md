# Obtém informação do cliente MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.get-client-info.php

---

# mysqli::$client\_info

# mysqli::get\_client\_info

# mysqli\_get\_client\_info

(PHP 5, PHP 7, PHP 8)

mysqli::$client\_info -- mysqli::get\_client\_info -- mysqli\_get\_client\_info — Obtém informação do cliente MySQL

### Descrição

Estilo orientado a objetos

[string](language.types.string.md) [$mysqli->client\_info](mysqli.get-client-info.md);

#[[\Deprecated](class.deprecated.md)]  
public function **mysqli::get\_client\_info**(): [string](language.types.string.md)

Estilo procedural

function **mysqli\_get\_client\_info**([?](language.types.null.md)[mysqli](class.mysqli.md) `$mysql` = [null](reserved.constants.md#constant.null)): [string](language.types.string.md)

Retorna uma string que representa a versão de biblioteca do cliente MySQL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma string que representa a versão da biblioteca do cliente MySQL.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Chamar **mysqli\_get\_client\_info()** com o argumento `mysql` foi descontinuado. Esta função nunca requereu um parâmetro, mas incorretamente permitia este parâmetro opcional. |
| 8.1.0 | O método orientado a objeto **mysqli::get\_client\_info()** foi descontinuado. |

### Examples

**Exemplo #1 mysqli\_get\_client\_info**

```
<?php

/* Não é necessária uma conexão para determinar
   a versão da biblioteca do cliente mysql */

printf("Client library version: %s\n", mysqli_get_client_info());
?>
```

### Veja também

- [mysqli\_get\_client\_version()](mysqli.get-client-version.md) - Retorna a versão do cliente MySQL como um inteiro
- [mysqli\_get\_server\_info()](mysqli.get-server-info.md) - Retorna a versão do servidor MySQL
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
