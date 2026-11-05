# Constrói o objeto Event

> **Fonte / Source:** https://www.php.net/manual/pt_BR/event.construct.php

---

# Event::\_\_construct

(PECL event >= 1.2.6-beta)

Event::\_\_construct — Constrói o objeto Event

### Descrição

public
function **Event::\_\_construct**(  
    
[EventBase](class.eventbase.md) `$base`
,  
    
[mixed](language.types.mixed.md) `$fd`
,  
    
[int](language.types.integer.md) `$what`
,  
    
[callable](language.types.callable.md) `$cb`
,  
    
[mixed](language.types.mixed.md) `$arg`
 = NULL
  
)

Constrói o objeto Event.

### Parâmetros

`base`
:   A base de eventos a ser associada.

`fd`
:   Recurso de fluxo, de soquete ou descritor numérico de arquivo. Para eventos
    de temporizador, informe
    **`-1`**.
    Para eventos de sinal, passe o número do sinal,
    por exemplo, **`SIGHUP`**.

`what`
:   Opções de Event.
    Consulte as [opções de Event](event.flags.md).

`cb`
:   A função de retorno do evento.
    Consulte as [funções de retorno de Event](event.callbacks.md).

`arg`
:   Dados personalizados. Se especificado, eles serão passados ​​para a função de retorno quando o
    evento for acionado.

### Veja também

- [Event::signal()](event.signal.md) - Constrói objeto de evento de sinal
- [Event::timer()](event.timer.md) - Constrói objeto de evento de temporizador

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
