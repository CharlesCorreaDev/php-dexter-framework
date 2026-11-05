# Retorna o URI da requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.geturi.php

---

# EventHttpRequest::getUri

(PECL event >= 1.4.0-beta)

EventHttpRequest::getUri — Retorna o URI da requisição

### Descrição

public
function **EventHttpRequest::getUri**(): [string](language.types.string.md)

Retorna o URI da requisição.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o URI da requisição.

### Veja também

- [EventHttpRequest::getCommand()](eventhttprequest.getcommand.md) - Retorna o comando de requisição (método)
- [EventHttpRequest::getHost()](eventhttprequest.gethost.md) - Retorna o host da requisição
- [EventHttpRequest::getResponseCode()](eventhttprequest.getresponsecode.md) - Retorna o código de resposta

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
