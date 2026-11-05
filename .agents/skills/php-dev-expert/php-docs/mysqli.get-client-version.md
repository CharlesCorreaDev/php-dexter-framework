# Retorna a versão do cliente MySQL como um inteiro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.get-client-version.php

---

# mysqli::$client\_version

# mysqli\_get\_client\_version

(PHP 5, PHP 7, PHP 8)

mysqli::$client\_version -- mysqli\_get\_client\_version — Retorna a versão do cliente MySQL como um inteiro

### Descrição

Estilo orientado a objetos

[int](language.types.integer.md) [$mysqli->client\_version](mysqli.get-client-version.md);

Estilo procedural

function **mysqli\_get\_client\_version**(): [int](language.types.integer.md)

Retorna a versão do cliente como um inteiro.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um número que representa a versão da biblioteca de cliente MySQL no formato:
`versão_principal*10000 + versão_menor *100 + sub_versão`.
Por exemplo, 4.1.0 é retornado como 40100.

Isto é útil para determinar rapidamente a versão da biblioteca de cliente
para saber se alguma funcionalidade existe.

### Examples

**Exemplo #1 mysqli\_get\_client\_version**

```
<?php

/* Não é necessária uma conexão para determinar
   a versão da biblioteca do cliente mysql */

printf("Client library version: %d\n", mysqli_get_client_version());
?>
```

### Veja também

- [mysqli\_get\_client\_info()](mysqli.get-client-info.md) - Obtém informação do cliente MySQL
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
