# Limpa os cabeçalhos de resposta HTTP armazenados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.http-clear-last-response-headers.php

---

# http\_clear\_last\_response\_headers

(PHP 8 >= 8.4.0)

http\_clear\_last\_response\_headers — Limpa os cabeçalhos de resposta HTTP armazenados

### Descrição

function **http\_clear\_last\_response\_headers**(): [void](language.types.void.md)

Limpa os cabeçalhos de resposta HTTP que foram recebidos usando
o [empacotador HTTP](wrappers.http.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [http\_get\_last\_response\_headers()](function.http-get-last-response-headers.md) - Recupera os últimos cabeçalhos de reposta HTTP

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
