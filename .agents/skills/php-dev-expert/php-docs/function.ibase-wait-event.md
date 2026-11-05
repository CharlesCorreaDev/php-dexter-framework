# Espera por um evento ser postado pelo banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-wait-event.php

---

# ibase\_wait\_event

(PHP 5, PHP 7 < 7.4.0)

ibase\_wait\_event — Espera por um evento ser postado pelo banco de dados

### Descrição

function **ibase\_wait\_event**([string](language.types.string.md) `$event_name`, [string](language.types.string.md) `...$event_names`): [string](language.types.string.md)

function **ibase\_wait\_event**([resource](language.types.resource.md) `$connection`, [string](language.types.string.md) `$event_name`, [string](language.types.string.md) `...$event_names`): [string](language.types.string.md)

Esta função suspende a execução do script até que um dos dos eventos especificados
seja postado pelo banco de dados. O nome do evento que foi postado é retornado. Esta
função aceita até 15 argumentos de eventos.

### Parâmetros

`event_name`
:   O nome do evento.

`event_names`

### Valor Retornado

Retorna o nome do evento que foi postado.

### Veja também

- [ibase\_set\_event\_handler()](function.ibase-set-event-handler.md) - Registra uma função de retorno a ser chamada quando eventos são postados
- [ibase\_free\_event\_handler()](function.ibase-free-event-handler.md) - Cancela um manipulador de eventos registrado

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
