# Conta o número de entradas ativas no mapa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/weakmap.count.php

---

# WeakMap::count

(PHP 8)

WeakMap::count — Conta o número de entradas ativas no mapa

### Descrição

public function **WeakMap::count**(): [int](language.types.integer.md)

Conta o número de entradas ativas no mapa.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de entradas ativas no mapa.

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
