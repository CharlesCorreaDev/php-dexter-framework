# Cria um novo evento de buffer SSL para enviar seus dados por meio de um SSL em um soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.sslsocket.php

---

# EventBufferEvent::sslSocket

(PECL event >= 1.2.6-beta)

EventBufferEvent::sslSocket — Cria um novo evento de buffer SSL para enviar seus dados por meio de um SSL em um soquete

### Descrição

public
static
function **EventBufferEvent::sslSocket**(  
    
[EventBase](class.eventbase.md) `$base`
,  
    
[mixed](language.types.mixed.md) `$socket`
,  
    
[EventSslContext](class.eventsslcontext.md) `$ctx`
,  
    
[int](language.types.integer.md) `$state`
,  
    
[int](language.types.integer.md) `$options`
 = ?  
): [EventBufferEvent](class.eventbufferevent.md)

Cria um novo evento de buffer SSL para enviar seus dados por um SSL em um soquete.

### Parâmetros

`base`
:   Base de eventos associada.

`socket`
:   Soquete a ser usado para este SSL. Pode ser um recurso de fluxo ou soquete, descritor numérico de arquivo
    ou **`null`**. Se
    `socket`
    for **`null`**, presume-se que o descritor de arquivo para o soquete será
    atribuído posteriormente, por exemplo, por meio do método
    [EventBufferEvent::connectHost()](eventbufferevent.connecthost.md)
    .

`ctx`
:   Objeto da classe
    [EventSslContext](class.eventsslcontext.md)
    .

`state`
:   O estado atual da conexão SSL:
    **`EventBufferEvent::SSL_OPEN`**,
    **`EventBufferEvent::SSL_ACCEPTING`**
    ou
    **`EventBufferEvent::SSL_CONNECTING`**.

`options`
:   As opções de eventos de buffer.

### Valor Retornado

Retorna
[EventBufferEvent](class.eventbufferevent.md)
objeto.

### Veja também

- [EventBufferEvent::sslFilter()](eventbufferevent.sslfilter.md) - Cria um novo evento de buffer SSL para enviar seus dados por outro evento de buffer

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
