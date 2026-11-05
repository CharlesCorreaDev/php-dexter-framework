# Envia outro bloco de dados como parte de uma resposta em bloco em andamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.sendreplychunk.php

---

# EventHttpRequest::sendReplyChunk

(PECL event >= 1.4.0-beta)

EventHttpRequest::sendReplyChunk — Envia outro bloco de dados como parte de uma resposta em bloco em andamento

### Descrição

public
function **EventHttpRequest::sendReplyChunk**(
[EventBuffer](class.eventbuffer.md) `$buf`
): [void](language.types.void.md)

Envia outro pedaço de dados como parte de uma resposta em pedaços em andamento. Após chamar
este método
`buf`
estará vazio.

### Parâmetros

`buf`
:   O bloco de dados a ser enviado como parte da resposta.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EventHttpRequest::sendReplyStart()](eventhttprequest.sendreplystart.md) - Inicia uma resposta em blocos
- [EventHttpRequest::sendReplyEnd()](eventhttprequest.sendreplyend.md) - Conclui uma resposta em blocos, liberando a requisição conforme apropriado

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
