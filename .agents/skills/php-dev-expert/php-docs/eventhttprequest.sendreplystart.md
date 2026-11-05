# Inicia uma resposta em blocos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.sendreplystart.php

---

# EventHttpRequest::sendReplyStart

(PECL event >= 1.4.0-beta)

EventHttpRequest::sendReplyStart — Inicia uma resposta em blocos

### Descrição

public
function **EventHttpRequest::sendReplyStart**(
[int](language.types.integer.md) `$code`
, 
[string](language.types.string.md) `$reason`
): [void](language.types.void.md)

Inicia uma resposta que usa
`Transfer-Encoding`
igual a `chunked`.

Isso permite que o chamador transmita a resposta de volta ao cliente e é útil
quando nem todos os dados da resposta estão imediatamente disponíveis ou ao
enviar respostas muito grandes.

O chamador precisa fornecer blocos de dados com
[EventHttpRequest::sendReplyChunk()](eventhttprequest.sendreplychunk.md)
e concluir a resposta
chamando [EventHttpRequest::sendReplyEnd()](eventhttprequest.sendreplyend.md).

### Parâmetros

`code`
:   O código de resposta HTTP a ser enviado.

`reason`
:   Uma breve mensagem para enviar com o código de resposta.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EventHttpRequest::sendReplyChunk()](eventhttprequest.sendreplychunk.md) - Envia outro bloco de dados como parte de uma resposta em bloco em andamento
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
