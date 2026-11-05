# Informa ao event_base para parar de despachar eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbase.stop.php

---

# EventBase::stop

(PECL event >= 1.2.6-beta)

EventBase::stop — Informa ao event\_base para parar de despachar eventos

### Descrição

public
function **EventBase::stop**(): [bool](language.types.boolean.md)

Informa ao event\_base para parar de despachar eventos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventBase::exit()](eventbase.exit.md) - Para de despachar eventos
- [EventBase::gotStop()](eventbase.gotstop.md) - Verifica se o laço de eventos foi informado para sair

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
