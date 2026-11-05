# Obtém todos os cabeçalhos da resposta HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apache-response-headers.php

---

# apache\_response\_headers

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

apache\_response\_headers — Obtém todos os cabeçalhos da resposta HTTP

### Descrição

function **apache\_response\_headers**(): [array](language.types.array.md)

Obtém todos os cabeçalhos de resposta. Funciona em
servidores web Apache, LiteSpeed, FastCGI, CLI e FPM.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um array de todos os cabeçalhos de resposta do Apache em caso de sucesso.

### Examples

**Exemplo #1 Exemplo da função **apache\_response\_headers()****

```
<?php
print_r(apache_response_headers());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [Accept-Ranges] => bytes
    [X-Powered-By] => PHP/4.3.8
)
```

### Veja também

- [apache\_request\_headers()](function.apache-request-headers.md) - Obtém todos os cabeçalhos da requisição HTTP
- [headers\_sent()](function.headers-sent.md) - Verifica se ou onde os cabeçalhos foram enviados
- [headers\_list()](function.headers-list.md) - Retorna uma lista de cabeçalhos de resposta enviados (ou prontos para enviar)

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
