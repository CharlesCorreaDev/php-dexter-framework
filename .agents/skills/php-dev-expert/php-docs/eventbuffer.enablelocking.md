# Habilita bloqueio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.enablelocking.php

---

# EventBuffer::enableLocking

(PECL event >= 1.2.6-beta)

EventBuffer::enableLocking — Habilita bloqueio

### Descrição

public
function **EventBuffer::enableLocking**(): [void](language.types.void.md)

Habilita o bloqueio em um
[EventBuffer](class.eventbuffer.md)
para que ele possa ser usado com segurança por vários threads ao mesmo tempo. Quando o
bloqueio estiver habilitado, ele será mantido quando as funções de retorno forem invocadas. Isso
pode resultar em beco sem saída se você não for cuidadoso. Planeje adequadamente!

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [» Evbuffers e Segurança para Threads](http://www.wangafu.net/~nickm/libevent-book/Ref7_evbuffer.html#_evbuffers_and_thread_safety)

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
