# Sobre funções de retorno de eventos de buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.about.callbacks.php

---

# Sobre funções de retorno de eventos de buffer

Um objeto da classe
[EventBufferEvent](class.eventbufferevent.md)
representa um
*evento de buffer*.
A natureza assíncrona da E/S executada pelo Libevent implica que um
soquete (ou outro tipo de descritor de arquivo) nem sempre está disponível. O evento
invoca funções de retorno correspondentes quando o recurso fica disponível para
leitura ou gravação, ou quando ocorre algum evento (por exemplo, erro, "fim de linha"
etc.).

As funções de retorno de leitura e gravação devem corresponder ao seguinte protótipo:

function **callback**(
[EventBufferEvent](class.eventbufferevent.md) `$bev`
 = **`null`**
, 
[mixed](language.types.mixed.md) `$arg`
 = **`null`**
): [void](language.types.void.md)

`bev`
:   Objeto
    [EventBufferEvent](class.eventbufferevent.md)
    associado.

`arg`
:   Variável personalizada anexada a todas as funções de retorno por meio de
    [EventBufferEvent::\_\_construct()](eventbufferevent.construct.md)
    ou
    [EventBufferEvent::setCallbacks()](eventbufferevent.setcallbacks.md).

A função de retorno do evento deve corresponder ao seguinte protótipo:

function **callback**(
[EventBufferEvent](class.eventbufferevent.md) `$bev`
 = **`null`**
, 
[int](language.types.integer.md) `$events`
 = 0
, 
[mixed](language.types.mixed.md) `$arg`
 = **`null`**
): [void](language.types.void.md)

`bev`
:   Objeto
    [EventBufferEvent](class.eventbufferevent.md)
    associado.

`events`
:   Máscara de bits de eventos:
    **`EventBufferEvent::READING`**,
    **`EventBufferEvent::WRITING`**,
    **`EventBufferEvent::EOL`**,
    **`EventBufferEvent::ERROR`**
    e
    **`EventBufferEvent::TIMEOUT`**.
    Consulte as
    [constantes de EventBufferEvent](class.eventbufferevent.md#eventbufferevent.constants)

`arg`
:   Variável personalizada anexada a todas as funções de retorno por meio de
    [EventBufferEvent::\_\_construct()](eventbufferevent.construct.md)
    ou
    [EventBufferEvent::setCallbacks()](eventbufferevent.setcallbacks.md).

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
