# Espreita o nó do topo da heap

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splheap.top.php

---

# SplHeap::top

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplHeap::top — Espreita o nó do topo da heap

### Descrição

public function **SplHeap::top**(): [mixed](language.types.mixed.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor do nó no topo.

### Erros/Exceções

Lança [RuntimeException](class.runtimeexception.md) quando a estrutura de dados está vazia.

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
