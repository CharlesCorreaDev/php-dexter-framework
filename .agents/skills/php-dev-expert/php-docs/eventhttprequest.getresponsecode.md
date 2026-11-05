# Retorna o código de resposta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.getresponsecode.php

---

# EventHttpRequest::getResponseCode

(PECL event >= 1.4.0-beta)

EventHttpRequest::getResponseCode — Retorna o código de resposta

### Descrição

public
function **EventHttpRequest::getResponseCode**(): [int](language.types.integer.md)

Retorna o código de resposta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o código de resposta da requisição.

### Veja também

- [EventHttpRequest::getCommand()](eventhttprequest.getcommand.md) - Retorna o comando de requisição (método)
- [EventHttpRequest::getHost()](eventhttprequest.gethost.md) - Retorna o host da requisição
- [EventHttpRequest::getUri()](eventhttprequest.geturi.md) - Retorna o URI da requisição

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
