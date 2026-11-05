# Conclui uma resposta em blocos, liberando a requisição conforme apropriado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.sendreplyend.php

---

# EventHttpRequest::sendReplyEnd

(PECL event >= 1.4.0-beta)

EventHttpRequest::sendReplyEnd — Conclui uma resposta em blocos, liberando a requisição conforme apropriado

### Descrição

public
function **EventHttpRequest::sendReplyEnd**(): [void](language.types.void.md)

Conclui uma resposta em blocos, liberando a requisição conforme apropriado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EventHttpRequest::sendReplyStart()](eventhttprequest.sendreplystart.md) - Inicia uma resposta em blocos
- [EventHttpRequest::sendReplyChunk()](eventhttprequest.sendreplychunk.md) - Envia outro bloco de dados como parte de uma resposta em bloco em andamento

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
