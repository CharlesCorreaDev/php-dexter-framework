# Inicia o observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evwatcher.start.php

---

# EvWatcher::start

(PECL ev >= 0.2.0)

EvWatcher::start — Inicia o observador

### Descrição

public
function **EvWatcher::start**(): [void](language.types.void.md)

Marca o observador como ativo. Note que somente observadores ativos receberão
eventos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EvWatcher::stop()](evwatcher.stop.md) - Interrrompe o observador

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
