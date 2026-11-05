# Despacha eventos pendentes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbase.dispatch.php

---

# EventBase::dispatch

(PECL event >= 1.2.6-beta)

EventBase::dispatch — Despacha eventos pendentes

### Descrição

public
function **EventBase::dispatch**(): [void](language.types.void.md)

Aguarda que os eventos se tornem ativos e executa seus retornos de chamada. O mesmo que
[EventBase::loop()](eventbase.loop.md)
sem sinalizadores definidos.

**Aviso**

*NÃO*
destrua o
objeto
[EventBase](class.eventbase.md)
enquanto os recursos dos objetos
`Event`
associados não forem liberados. Caso contrário, isso levará a resultados
imprevisíveis!

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventBase::loop()](eventbase.loop.md) - Despacha eventos pendentes

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
