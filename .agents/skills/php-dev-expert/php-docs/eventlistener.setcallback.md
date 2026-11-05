# Define função de retorno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventlistener.setcallback.php

---

# EventListener::setCallback

(PECL event >= 1.2.6-beta)

EventListener::setCallback — Define função de retorno

### Descrição

public
function **EventListener::setCallback**(
[callable](language.types.callable.md) `$cb`
, 
[mixed](language.types.mixed.md) `$arg`
 = **`null`**
): [void](language.types.void.md)

Ajusta a função de retorno do ouvinte de conexão de evento e, opcionalmente,
o argumento da função de retorno.

### Parâmetros

`cb`
:   A nova função de retorno para novas conexões. Ignorado se **`null`**.

    Deve corresponder ao seguinte protótipo:

    function **callback**(  
        
    [EventListener](class.eventlistener.md) `$listener`
     = **`null`**
    ,  
        
    [mixed](language.types.mixed.md) `$fd`
     = **`null`**
    ,  
        
    [array](language.types.array.md) `$address`
     = **`null`**
    ,  
        
    [mixed](language.types.mixed.md) `$arg`
     = **`null`**
      
    ): [void](language.types.void.md)

    `listener`
    :   O
        objeto
        [EventListener](class.eventlistener.md)

    `fd`
    :   O descritor de arquivo ou um recurso associado ao ouvinte.

    `address`
    :   Array de dois elementos: endereço IP e a
        porta do
        *servidor*.

    `arg`
    :   Dados personalizados do usuário anexados à função de retorno.

`arg`
:   Dados personalizados do usuário anexados à função de retorno. Ignorado se **`null`**.

### Valor Retornado

Nenhum valor é retornado.

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
