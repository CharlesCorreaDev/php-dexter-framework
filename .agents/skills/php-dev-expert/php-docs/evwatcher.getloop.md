# Retorna o laço responsável pelo observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evwatcher.getloop.php

---

# EvWatcher::getLoop

(PECL ev >= 0.2.0)

EvWatcher::getLoop — Retorna o laço responsável pelo observador

### Descrição

public
function **EvWatcher::getLoop**(): [EvLoop](class.evloop.md)

Retorna o laço responsável pelo observador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o objeto de laço de evento
[EvLoop](class.evloop.md)
responsável pelo observador.

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
