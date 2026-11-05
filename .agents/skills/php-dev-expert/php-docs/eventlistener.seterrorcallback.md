# Define a função de retorno de erro do ouvinte de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventlistener.seterrorcallback.php

---

# EventListener::setErrorCallback

(PECL event >= 1.2.6-beta)

EventListener::setErrorCallback — Define a função de retorno de erro do ouvinte de eventos

### Descrição

public
function **EventListener::setErrorCallback**(
[string](language.types.string.md) `$cb`
): [void](language.types.void.md)

Define a função de retorno de erro do ouvinte de eventos.

### Parâmetros

`cb`
:   A função de retorno de erro. Deve corresponder ao seguinte protótipo:

    function **callback**(
    [EventListener](class.eventlistener.md) `$listener`
     = **`null`**
    , 
    [mixed](language.types.mixed.md) `$data`
     = **`null`**
    ): [void](language.types.void.md)

    `listener`
    :   O
        objeto
        [EventListener](class.eventlistener.md).

    `data`
    :   Dados personalizados do usuário anexados à função de retorno.

### Valor Retornado

### Veja também

- [EventListener::setCallback()](eventlistener.setcallback.md) - Define função de retorno

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
