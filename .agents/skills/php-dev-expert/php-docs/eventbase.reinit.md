# Reinicializa a base de eventos (após um "fork")

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbase.reinit.php

---

# EventBase::reInit

(PECL event >= 1.2.6-beta)

EventBase::reInit — Reinicializa a base de eventos (após um "fork")

### Descrição

public
function **EventBase::reInit**(): [bool](language.types.boolean.md)

Reinicializa a base do evento. Deve ser chamado após um "fork".

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
