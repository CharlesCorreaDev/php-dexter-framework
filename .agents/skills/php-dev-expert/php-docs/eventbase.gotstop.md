# Verifica se o laço de eventos foi informado para sair

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbase.gotstop.php

---

# EventBase::gotStop

(PECL event >= 1.2.6-beta)

EventBase::gotStop — Verifica se o laço de eventos foi informado para sair

### Descrição

public
function **EventBase::gotStop**(): [bool](language.types.boolean.md)

Verifica se o laço de eventos foi informado para sair
por [EventBase::stop()](eventbase.stop.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o laço de eventos foi informado para sair por
[EventBase::stop()](eventbase.stop.md).
Caso contrário, **`false`**.

### Veja também

- [EventBase::exit()](eventbase.exit.md) - Para de despachar eventos
- [EventBase::stop()](eventbase.stop.md) - Informa ao event\_base para parar de despachar eventos
- [EventBase::gotExit()](eventbase.gotexit.md) - Verifica se o laço de eventos foi informado para sair

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
