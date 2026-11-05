# A classe EventHttpRequest

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.eventhttprequest.php

---

# A classe EventHttpRequest

(PECL event >= 1.4.0-beta)

## Introdução

Representa uma requisição HTTP.

## Resumo da classe

class **EventHttpRequest**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[CMD\_GET](class.eventhttprequest.md#eventhttprequest.constants.cmd-get) = 1;

const
[int](language.types.integer.md)
[CMD\_POST](class.eventhttprequest.md#eventhttprequest.constants.cmd-post) = 2;

const
[int](language.types.integer.md)
[CMD\_HEAD](class.eventhttprequest.md#eventhttprequest.constants.cmd-head) = 4;

const
[int](language.types.integer.md)
[CMD\_PUT](class.eventhttprequest.md#eventhttprequest.constants.cmd-put) = 8;

const
[int](language.types.integer.md)
[CMD\_DELETE](class.eventhttprequest.md#eventhttprequest.constants.cmd-delete) = 16;

const
[int](language.types.integer.md)
[CMD\_OPTIONS](class.eventhttprequest.md#eventhttprequest.constants.cmd-options) = 32;

const
[int](language.types.integer.md)
[CMD\_TRACE](class.eventhttprequest.md#eventhttprequest.constants.cmd-trace) = 64;

const
[int](language.types.integer.md)
[CMD\_CONNECT](class.eventhttprequest.md#eventhttprequest.constants.cmd-connect) = 128;

const
[int](language.types.integer.md)
[CMD\_PATCH](class.eventhttprequest.md#eventhttprequest.constants.cmd-patch) = 256;

const
[int](language.types.integer.md)
[INPUT\_HEADER](class.eventhttprequest.md#eventhttprequest.constants.input-header) = 1;

const
[int](language.types.integer.md)
[OUTPUT\_HEADER](class.eventhttprequest.md#eventhttprequest.constants.output-header) = 2;

/\* Métodos \*/

public
function [addHeader](eventhttprequest.addheader.md)(
[string](language.types.string.md) `$key`
, 
[string](language.types.string.md) `$value`
, 
[int](language.types.integer.md) `$type`
): [bool](language.types.boolean.md)

public
function [cancel](eventhttprequest.cancel.md)(): [void](language.types.void.md)

public
function [clearHeaders](eventhttprequest.clearheaders.md)(): [void](language.types.void.md)

public
function [closeConnection](eventhttprequest.closeconnection.md)(): [void](language.types.void.md)

public
function [\_\_construct](eventhttprequest.construct.md)(
[callable](language.types.callable.md) `$callback`
, 
[mixed](language.types.mixed.md) `$data`
 = **`null`**
)

public
function [findHeader](eventhttprequest.findheader.md)(
[string](language.types.string.md) `$key`
, 
[string](language.types.string.md) `$type`
): [void](language.types.void.md)

public
function [free](eventhttprequest.free.md)(): [void](language.types.void.md)

public
function [getBufferEvent](eventhttprequest.getbufferevent.md)(): [EventBufferEvent](class.eventbufferevent.md)

public
function [getCommand](eventhttprequest.getcommand.md)(): [void](language.types.void.md)

public
function [closeConnection](eventhttprequest.closeconnection.md)(): [EventHttpConnection](class.eventhttpconnection.md)

public
function [getHost](eventhttprequest.gethost.md)(): [string](language.types.string.md)

public
function [getInputBuffer](eventhttprequest.getinputbuffer.md)(): [EventBuffer](class.eventbuffer.md)

public
function [getInputHeaders](eventhttprequest.getinputheaders.md)(): [array](language.types.array.md)

public
function [getOutputBuffer](eventhttprequest.getoutputbuffer.md)(): [EventBuffer](class.eventbuffer.md)

public
function [getOutputHeaders](eventhttprequest.getoutputheaders.md)(): [void](language.types.void.md)

public
function [getResponseCode](eventhttprequest.getresponsecode.md)(): [int](language.types.integer.md)

public
function [getUri](eventhttprequest.geturi.md)(): [string](language.types.string.md)

public
function [removeHeader](eventhttprequest.removeheader.md)(
[string](language.types.string.md) `$key`
, 
[string](language.types.string.md) `$type`
): [void](language.types.void.md)

public
function [sendError](eventhttprequest.senderror.md)(
[int](language.types.integer.md) `$error`
, 
[string](language.types.string.md) `$reason`
 = **`null`**
): [void](language.types.void.md)

public
function [sendReply](eventhttprequest.sendreply.md)(
[int](language.types.integer.md) `$code`
, 
[string](language.types.string.md) `$reason`
, 
[EventBuffer](class.eventbuffer.md) `$buf`
 = ?): [void](language.types.void.md)

public
function [sendReplyChunk](eventhttprequest.sendreplychunk.md)(
[EventBuffer](class.eventbuffer.md) `$buf`
): [void](language.types.void.md)

public
function [sendReplyEnd](eventhttprequest.sendreplyend.md)(): [void](language.types.void.md)

public
function [sendReplyStart](eventhttprequest.sendreplystart.md)(
[int](language.types.integer.md) `$code`
, 
[string](language.types.string.md) `$reason`
): [void](language.types.void.md)

}

## Constantes predefinidas

**`EventHttpRequest::CMD_GET`**
:   Método GET (comando)

**`EventHttpRequest::CMD_POST`**
:   Método POST (comando)

**`EventHttpRequest::CMD_HEAD`**
:   Método HEAD (comando)

**`EventHttpRequest::CMD_PUT`**
:   Método PUT (comando)

**`EventHttpRequest::CMD_DELETE`**
:   Método DELETE (comando)

**`EventHttpRequest::CMD_OPTIONS`**
:   Método OPTIONS (comando)

**`EventHttpRequest::CMD_TRACE`**
:   Método TRACE (comando)

**`EventHttpRequest::CMD_CONNECT`**
:   Método CONNECT (comando)

**`EventHttpRequest::CMD_PATCH`**
:   Método PATCH (comando)

**`EventHttpRequest::INPUT_HEADER`**
:   Solicita cabeçalho de entrada.

**`EventHttpRequest::OUTPUT_HEADER`**
:   Solicita cabeçalho de saída.

## Índice

- [EventHttpRequest::addHeader](eventhttprequest.addheader.md) — Adiciona um cabeçalho HTTP aos cabeçalhos da requisição
- [EventHttpRequest::cancel](eventhttprequest.cancel.md) — Cancela uma requisição HTTP pendente
- [EventHttpRequest::clearHeaders](eventhttprequest.clearheaders.md) — Remove todos os cabeçalhos de saída da lista de cabeçalhos da requisição
- [EventHttpRequest::closeConnection](eventhttprequest.closeconnection.md) — Fecha a conexão HTTP associada
- [EventHttpRequest::\_\_construct](eventhttprequest.construct.md) — Constrói objeto EventHttpRequest
- [EventHttpRequest::findHeader](eventhttprequest.findheader.md) — Encontra o valor pertencente a um cabeçalho
- [EventHttpRequest::free](eventhttprequest.free.md) — Libera o objeto e remove os eventos associados
- [EventHttpRequest::getBufferEvent](eventhttprequest.getbufferevent.md) — Retorna o objeto EventBufferEvent
- [EventHttpRequest::getCommand](eventhttprequest.getcommand.md) — Retorna o comando de requisição (método)
- [EventHttpRequest::getConnection](eventhttprequest.getconnection.md) — Retorna objeto EventHttpConnection
- [EventHttpRequest::getHost](eventhttprequest.gethost.md) — Retorna o host da requisição
- [EventHttpRequest::getInputBuffer](eventhttprequest.getinputbuffer.md) — Retorna o buffer de entrada
- [EventHttpRequest::getInputHeaders](eventhttprequest.getinputheaders.md) — Retorna um array associativo dos cabeçalhos de entrada
- [EventHttpRequest::getOutputBuffer](eventhttprequest.getoutputbuffer.md) — Retorna o buffer de saída da requisição
- [EventHttpRequest::getOutputHeaders](eventhttprequest.getoutputheaders.md) — Retorna um array associativo dos cabeçalhos de saída
- [EventHttpRequest::getResponseCode](eventhttprequest.getresponsecode.md) — Retorna o código de resposta
- [EventHttpRequest::getUri](eventhttprequest.geturi.md) — Retorna o URI da requisição
- [EventHttpRequest::removeHeader](eventhttprequest.removeheader.md) — Remove um cabeçalho HTTP dos cabeçalhos da requisição
- [EventHttpRequest::sendError](eventhttprequest.senderror.md) — Envia uma mensagem de erro HTML para o cliente
- [EventHttpRequest::sendReply](eventhttprequest.sendreply.md) — Envia uma resposta HTML ao cliente
- [EventHttpRequest::sendReplyChunk](eventhttprequest.sendreplychunk.md) — Envia outro bloco de dados como parte de uma resposta em bloco em andamento
- [EventHttpRequest::sendReplyEnd](eventhttprequest.sendreplyend.md) — Conclui uma resposta em blocos, liberando a requisição conforme apropriado
- [EventHttpRequest::sendReplyStart](eventhttprequest.sendreplystart.md) — Inicia uma resposta em blocos

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
