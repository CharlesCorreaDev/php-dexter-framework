# Reconfigura o evento do temporizador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/event.settimer.php

---

# Event::setTimer

(PECL event >= 1.2.6-beta)

Event::setTimer — Reconfigura o evento do temporizador

### Descrição

public
function **Event::setTimer**(
[EventBase](class.eventbase.md) `$base`
, 
[callable](language.types.callable.md) `$cb`
, 
[mixed](language.types.mixed.md) `$arg`
 = ?): [bool](language.types.boolean.md)

Reconfigura o evento do temporizador. Note que esta função não invoca
o obsoleto
`event_set`
do libevent. Em vez disso,
ela chama
`event_assign`.

### Parâmetros

`base`
:   A base de eventos para se associar.

`cb`
:   A função de retorno do evento de temporizador.
    Consulte as [funções de retorno de Event](event.callbacks.md).

`arg`
:   Dados personalizados. Se especificado, eles serão passados ​​para a função de retorno quando o
    evento for acionado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [Event::\_\_construct()](event.construct.md) - Constrói o objeto Event
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
