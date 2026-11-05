# Constrói objeto de evento de temporizador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/event.timer.php

---

# Event::timer

(PECL event >= 1.2.6-beta)

Event::timer — Constrói objeto de evento de temporizador

### Descrição

public
static
function **Event::timer**(
[EventBase](class.eventbase.md) `$base`
, 
[callable](language.types.callable.md) `$cb`
, 
[mixed](language.types.mixed.md) `$arg`
 = ?): [Event](class.event.md)

Constrói objeto de evento de temporizador. Este é um método direto para criar um
evento de temporizador. Observe que o método genérico
[Event::\_\_construct()](event.construct.md)
pode construir objetos de evento de sinal também.

### Parâmetros

`base`
:   O objeto base do evento associado.

`cb`
:   A função de retorno do evento de temporizador.
    Consulte as [funções de retorno de Event](event.callbacks.md).

`arg`
:   Dados personalizados. Se especificado, eles serão passados ​​para a função de retorno quando o
    evento for acionado.

### Valor Retornado

Retorna o objeto Event em caso de sucesso. Caso contrário, **`false`**.

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
