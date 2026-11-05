# Cancela um manipulador de eventos registrado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-free-event-handler.php

---

# ibase\_free\_event\_handler

(PHP 5, PHP 7 < 7.4.0)

ibase\_free\_event\_handler — Cancela um manipulador de eventos registrado

### Descrição

function **ibase\_free\_event\_handler**([resource](language.types.resource.md) `$event`): [bool](language.types.boolean.md)

Esta função faz com que o manipulador de eventos registrado especificado por
`event` seja cancelado. A função de callback não será mais
chamada para os eventos que estava registrada para manipular.

### Parâmetros

`event`
:   Um resource de evento criado com
    [ibase\_set\_event\_handler()](function.ibase-set-event-handler.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ibase\_set\_event\_handler()](function.ibase-set-event-handler.md) - Registra uma função de retorno a ser chamada quando eventos são postados

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
