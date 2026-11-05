# Retorna o conjunto anterior de valores retornados por EvStat::attr

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evstat.prev.php

---

# EvStat::prev

(PECL ev >= 0.2.0)

EvStat::prev — Retorna o conjunto anterior de valores retornados por EvStat::attr

### Descrição

public
function **EvStat::prev**(): [void](language.types.void.md)

Funciona como
[EvStat::attr()](evstat.attr.md),
mas retorna o conjunto anterior de valores.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com a mesma estrutura que o array retornado por
[EvStat::attr()](evstat.attr.md).
O array contém valores detectados anteriormente.

### Veja também

- [EvStat::attr()](evstat.attr.md) - Retorna os valores detectados mais recentemente por Ev
- [EvStat::stat()](evstat.stat.md) - Inicia a chamada stat

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
