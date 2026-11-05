# Constrói objeto de evento de sinal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/event.signal.php

---

# Event::signal

(PECL event >= 1.2.6-beta)

Event::signal — Constrói objeto de evento de sinal

### Descrição

public
static
function **Event::signal**(  
    
[EventBase](class.eventbase.md) `$base`
,  
    
[int](language.types.integer.md) `$signum`
,  
    
[callable](language.types.callable.md) `$cb`
,  
    
[mixed](language.types.mixed.md) `$arg`
 = ?  
): [Event](class.event.md)

Constrói objeto de evento de sinal. Este é um método direto para criar
um evento de sinal. Observe que o método genérico
[Event::\_\_construct()](event.construct.md)
pode construir objetos de evento de sinal também.

### Parâmetros

`base`
:   O objeto base do evento associado.

`signum`
:   O número do sinal.

`cb`
:   A função de retorno do evento de sinal.
    Consulte as [funções de retorno de Event](event.callbacks.md).

`arg`
:   Dados personalizados. Se especificado, eles serão passados ​​para a função de retorno quando o
    evento for acionado.

### Valor Retornado

Retorna o objeto Event em caso de sucesso. Caso contrário, **`false`**.

### Veja também

- [Construindo eventos de sinal](event.constructing.signal.events.md)

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
