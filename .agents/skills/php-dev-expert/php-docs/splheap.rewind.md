# Rebobina o iterador de volta ao início (sem ação)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splheap.rewind.php

---

# SplHeap::rewind

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplHeap::rewind — Rebobina o iterador de volta ao início (sem ação)

### Descrição

public function **SplHeap::rewind**(): [void](language.types.void.md)

Isso rebobina o iterador para o início. Isso não faz nada para heaps,
pois o iterador é virtual e na verdade nunca se move do topo da
heap.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

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
