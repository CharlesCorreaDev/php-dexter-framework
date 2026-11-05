# Funções de retorno de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/event.callbacks.php

---

# Funções de retorno de eventos

Se uma função de retorno for registrada para um evento, ela será chamada quando o evento
se tornar ativo. Para associar uma função de retorno a um evento, pode-se passar um
[callable](language.types.callable.md)
para
[Event::\_\_construct()](event.construct.md),
ou
[Event::set()](event.set.md),
ou um dos métodos de fábrica
como [Event::timer()](event.timer.md).

Uma função de retorno de evento deve corresponder ao seguinte protótipo:

function **callback**(
[mixed](language.types.mixed.md) `$fd`
 = **`null`**
, 
[int](language.types.integer.md) `$what`
 = ?, 
[mixed](language.types.mixed.md) `$arg`
 = **`null`**
): [void](language.types.void.md)

`fd`
:   O descritor de arquivo, recurso de fluxo ou soquete associado ao
    evento. Para o evento de sinal
    `fd`
    é igual ao número do sinal.

`what`
:   Máscara de bits de
    *todos*
    eventos acionados.

`arg`
:   Dados personalizados do usuário.

[Event::timer()](event.timer.md)
espera que a função de retorno corresponda ao seguinte protótipo:

function **callback**(
[mixed](language.types.mixed.md) `$arg`
 = **`null`**
): [void](language.types.void.md)

`arg`
:   Dados personalizados do usuário.

[Event::signal()](event.signal.md)
espera que a função de retorno corresponda ao seguinte protótipo:

function **callback**(
[int](language.types.integer.md) `$signum`
 = ?, 
[mixed](language.types.mixed.md) `$arg`
 = **`null`**
): [void](language.types.void.md)

`signum`
:   O número do sinal disparado
    (por ex.
    **`SIGTERM`**).

`arg`
:   Dados personalizados do usuário.

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
