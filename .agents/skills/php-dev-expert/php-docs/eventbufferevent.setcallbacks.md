# Atribui funções de retorno de leitura, escrita e evento (status)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.setcallbacks.php

---

# EventBufferEvent::setCallbacks

(PECL event >= 1.2.6-beta)

EventBufferEvent::setCallbacks — Atribui funções de retorno de leitura, escrita e evento (status)

### Descrição

public
function **EventBufferEvent::setCallbacks**(  
    
[callable](language.types.callable.md) `$readcb`
,  
    
[callable](language.types.callable.md) `$writecb`
,  
    
[callable](language.types.callable.md) `$eventcb`
,  
    
[mixed](language.types.mixed.md) `$arg`
 = ?  
): [void](language.types.void.md)

Atribui funções de retorno de leitura, escrita e evento (status).

### Parâmetros

`readcb`
:   Função de retorno de leitura. Consulte
    [sobre funções de retorno
    de eventos de buffer](eventbufferevent.about.callbacks.md).

`writecb`
:   Função de retorno de escrita. Consulte
    [sobre funções de retorno
    de eventos de buffer](eventbufferevent.about.callbacks.md).

`eventcb`
:   Função de retorno de alteração de status. Consulte
    [sobre funções de retorno
    de eventos de buffer](eventbufferevent.about.callbacks.md).

`arg`
:   Uma variável que será passada para todos as funções de retorno

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EventBufferEvent::\_\_construct()](eventbufferevent.construct.md) - Constrói objeto EventBufferEvent

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
