# Envia uma resposta HTML ao cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.sendreply.php

---

# EventHttpRequest::sendReply

(PECL event >= 1.4.0-beta)

EventHttpRequest::sendReply — Envia uma resposta HTML ao cliente

### Descrição

public
function **EventHttpRequest::sendReply**(
[int](language.types.integer.md) `$code`
, 
[string](language.types.string.md) `$reason`
, 
[EventBuffer](class.eventbuffer.md) `$buf`
 = ?): [void](language.types.void.md)

Envia uma resposta HTML para o cliente. O corpo da resposta consiste nos dados no
parâmetro
`buf`
opcional.

### Parâmetros

`code`
:   O código de resposta HTTP a ser enviado.

`reason`
:   Uma breve mensagem para enviar com o código de resposta.

`buf`
:   O corpo da resposta.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EventHttpRequest::sendError()](eventhttprequest.senderror.md) - Envia uma mensagem de erro HTML para o cliente
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
