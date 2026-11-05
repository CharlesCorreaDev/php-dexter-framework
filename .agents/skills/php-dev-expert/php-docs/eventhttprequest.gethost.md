# Retorna o host da requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.gethost.php

---

# EventHttpRequest::getHost

(PECL event >= 1.4.0-beta)

EventHttpRequest::getHost — Retorna o host da requisição

### Descrição

public
function **EventHttpRequest::getHost**(): [string](language.types.string.md)

Retorna o host da requisição.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o host da requisição.

### Veja também

- [EventHttpRequest::getUri()](eventhttprequest.geturi.md) - Retorna o URI da requisição
- [EventHttpRequest::getCommand()](eventhttprequest.getcommand.md) - Retorna o comando de requisição (método)

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
