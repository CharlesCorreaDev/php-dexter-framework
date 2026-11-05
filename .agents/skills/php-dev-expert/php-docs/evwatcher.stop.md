# Interrrompe o observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evwatcher.stop.php

---

# EvWatcher::stop

(PECL ev >= 0.2.0)

EvWatcher::stop — Interrrompe o observador

### Descrição

public
function **EvWatcher::stop**(): [void](language.types.void.md)

Marca o observador como inativo. Note que somente observadores ativos receberão
eventos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EvWatcher::start()](evwatcher.start.md) - Inicia o observador

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
