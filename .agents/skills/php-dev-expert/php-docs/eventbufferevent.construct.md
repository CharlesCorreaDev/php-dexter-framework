# Constrói objeto EventBufferEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.construct.php

---

# EventBufferEvent::\_\_construct

(PECL event >= 1.2.6-beta)

EventBufferEvent::\_\_construct — Constrói objeto EventBufferEvent

### Descrição

public
function **EventBufferEvent::\_\_construct**(  
    
[EventBase](class.eventbase.md) `$base`
,  
    
[mixed](language.types.mixed.md) `$socket`
 = **`null`**
,  
    
[int](language.types.integer.md) `$options`
 = 0
,  
    
[callable](language.types.callable.md) `$readcb`
 = **`null`**
,  
    
[callable](language.types.callable.md) `$writecb`
 = **`null`**
,  
    
[callable](language.types.callable.md) `$eventcb`
 = **`null`**
,  
    
[mixed](language.types.mixed.md) `$arg`
 = **`null`**
  
)

Cria um evento de buffer em um soquete, fluxo ou descritor de arquivo. Passar
**`null`** para
`socket`
significa que o soquete deve ser criado mais tarde, por exemplo, por meio de
[EventBufferEvent::connect()](eventbufferevent.connect.md).

### Parâmetros

`base`
:   Base de eventos que deve ser associada ao novo evento de buffer.

`socket`
:   Pode ser criado como um fluxo (não necessariamente por meio d
    extensão
    `sockets`)

`options`
:   Uma das
    [constantes
    EventBufferEvent::OPT\_\*](class.eventbufferevent.md#eventbufferevent.constants)
    ou
    `0`.

`readcb`
:   Função de retorno do evento de leitura. Veja
    [sobre funções de retorno
    de evento de buffer](eventbufferevent.about.callbacks.md).

`writecb`
:   Função de retorno do evento de escrita. Veja
    [sobre funções de retorno
    de evento de buffer](eventbufferevent.about.callbacks.md).

`eventcb`
:   Função de retorno do evento de alteração de status. Veja
    [sobre funções de retorno
    de evento de buffer](eventbufferevent.about.callbacks.md).

`arg`
:   Uma variável que será passada para todos as funções de retorno.

### Veja também

- [EventBufferEvent::sslFilter()](eventbufferevent.sslfilter.md) - Cria um novo evento de buffer SSL para enviar seus dados por outro evento de buffer
- [EventBufferEvent::sslSocket()](eventbufferevent.sslsocket.md) - Cria um novo evento de buffer SSL para enviar seus dados por meio de um SSL em um soquete

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
